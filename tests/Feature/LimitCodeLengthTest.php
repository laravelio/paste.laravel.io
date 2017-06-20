<?php

namespace Tests\Feature;

use Tests\TestCase;

class LimitCodeLengthTest extends TestCase
{
    /** @test */
    public function it_disallows_long_code_posts()
    {
        $long_text = file_get_contents(__DIR__ . '/../artifacts/LongText.txt');

        $this->post('/', ['code' => $long_text])
            ->assertStatus(302)
            ->assertSessionHas('editor_error', 'Data entered was too long')
            ->assertRedirect('/');
    }
}
