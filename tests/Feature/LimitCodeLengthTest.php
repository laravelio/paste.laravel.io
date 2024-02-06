<?php

namespace Tests\Feature;

use Tests\TestCase;

class LimitCodeLengthTest extends TestCase
{
    /** @test */
    public function it_disallows_long_code_posts(): void
    {
        $code = file_get_contents(__DIR__.'/../artifacts/long_text.txt');

        $this->post('/', compact('code'))
            ->assertSessionHasErrors('code')
            ->assertRedirect('/');
    }
}
