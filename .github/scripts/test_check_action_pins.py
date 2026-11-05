"""Exercise the pinning policy through its command-line interface."""

from pathlib import Path
import subprocess
import sys
import tempfile
import unittest


CHECKER = Path(__file__).with_name('check-action-pins.py').resolve()


class ActionPinsTest(unittest.TestCase):
    def check_workflow(self, source):
        with tempfile.TemporaryDirectory() as directory:
            workflows = Path(directory, '.github/workflows')
            workflows.mkdir(parents=True)
            (workflows / 'fixture.yaml').write_text(source)
            return subprocess.run(
                [sys.executable, str(CHECKER)], cwd=directory,
                capture_output=True, text=True,
            )

    def test_immutable_and_local_references(self):
        result = self.check_workflow('''
jobs:
  reusable:
    uses: owner/repo/.github/workflows/test.yml@0123456789abcdef0123456789abcdef01234567
  local_workflow:
    uses: ./.github/workflows/test.yml
  steps:
    steps:
      - uses: "owner/repo@0123456789abcdef0123456789abcdef01234567" # v1
      - uses: './.github/actions/local'
      - uses: >-
          owner/repo/subpath@0123456789abcdef0123456789abcdef01234567
      - uses: docker://alpine@sha256:0123456789abcdef0123456789abcdef0123456789abcdef0123456789abcdef
      - {uses: 'docker://registry:5000/image:tag@sha256:0123456789abcdef0123456789abcdef0123456789abcdef0123456789abcdef'}
      - run: 'echo "uses: owner/repo@main"'
''')
        self.assertEqual(result.returncode, 0, result.stderr)
        self.assertIn('references are pinned', result.stdout)

    def test_mutable_and_malformed_references(self):
        references = [
            'owner/repo@v1',
            'owner/repo@main',
            'owner/repo@0123456',
            'owner/repo@' + 'a' * 39,
            'owner/repo@' + 'a' * 41,
            'owner/repo@' + 'g' * 40,
            'owner/repo@main # ' + 'a' * 40,
            'owner/repo/.github/workflows/test.yml@main',
            'docker://alpine:3',
            'docker://alpine@' + 'a' * 40,
            'docker://alpine@sha256:' + 'a' * 63,
            'docker://alpine@sha256:' + 'a' * 65,
            'docker://alpine@sha256:' + 'g' * 64,
        ]
        for reference in references:
            for placement in ('    uses: "{}"', '    steps:\n      - {{uses: "{}"}}'):
                with self.subTest(reference=reference, placement=placement):
                    result = self.check_workflow('jobs:\n  test:\n' + placement.format(reference))
                    self.assertNotEqual(result.returncode, 0)
                    self.assertIn('Pin external actions/workflows', result.stderr)

    def test_invalid_yaml_fails(self):
        result = self.check_workflow('jobs: [')
        self.assertNotEqual(result.returncode, 0)


if __name__ == '__main__':
    unittest.main()
