"""Require immutable references for workflow actions and reusable workflows."""

from pathlib import Path
import re
import sys

import yaml


def pinned(reference):
    if not isinstance(reference, str):
        return False
    if reference.startswith('./'):
        return True
    if reference.startswith('docker://'):
        return re.fullmatch(r'docker://[^\s@]+@sha256:[0-9a-f]{64}', reference) is not None
    return re.fullmatch(r'[^\s@]+/[^\s@]+@[0-9a-f]{40}', reference) is not None


def main():
    failures = []
    paths = sorted(path for path in Path('.github/workflows').rglob('*')
                   if path.suffix in ('.yml', '.yaml'))
    if not paths:
        sys.exit('No workflows found to check.')
    for path in paths:
        workflow = yaml.safe_load(path.read_text())
        for job_name, job in workflow['jobs'].items():
            # Job-level uses calls a reusable workflow; step-level uses an action.
            for entry in [job, *job.get('steps', [])]:
                if 'uses' in entry and not pinned(entry['uses']):
                    failures.append(f'{path}: {job_name}: {entry["uses"]}')
    if failures:
        print('\n'.join(failures), file=sys.stderr)
        sys.exit('Pin external actions/workflows to full commit SHAs and Docker actions to sha256 digests.')
    print(f'All action and reusable workflow references are pinned ({len(paths)} workflows).')


if __name__ == '__main__':
    main()
