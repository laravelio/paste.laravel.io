<?php

namespace Tests\Feature;

use App\Models\Paste;
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
            ->assertSee('Reset');
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
        $paste = Paste::factory()->create();

        $this->get("/{$paste->hash}")
            ->assertSee($paste->code);
    }

    /** @test */
    public function users_can_see_raw_pastes()
    {
        $paste = Paste::factory()->create();

        $this->get("/{$paste->hash}/raw")
            ->assertSee($paste->code);
    }

    /** @test */
    public function users_can_see_the_fork_page()
    {
        $paste = Paste::factory()->create();

        $this->get("/fork/{$paste->hash}")
            ->assertSee($paste->code);
    }

    /** @test */
    public function users_can_fork_pastes()
    {
        $paste = Paste::factory()->create();

        $this->post("/fork/{$paste->hash}", ['code' => 'foo code'])
            ->assertStatus(302);

        $this->assertDatabaseHas('pastes', ['code' => 'foo code']);
    }
}
