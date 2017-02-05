<?php

namespace Tests\Feature;

use App\Paste;
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

    /** @test */
    public function users_can_see_pastes()
    {
        $paste = factory(Paste::class)->create();

        $this->get("/{$paste->hash}")
            ->assertSee(e($paste->code));
    }

    /** @test */
    public function users_can_see_raw_pastes()
    {
        $paste = factory(Paste::class)->create();

        $this->get("/{$paste->hash}/raw")
            ->assertSee(e($paste->code));
    }
}
