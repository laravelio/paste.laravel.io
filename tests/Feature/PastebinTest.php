<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class PastebinTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_shows_the_pastebin()
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSee('Paste')
            ->assertSee('Clear');
    }

    /** @test */
    public function users_can_create_pastes()
    {
        $this->post('/', ['code' => 'My paste'])->assertStatus(302);

        $this->assertDatabaseHas('pastes', ['code' => 'My paste']);
    }
}
