<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Tracks;

class AudioStreamingTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function audio_files_can_be_loaded() {
        $this->withoutExceptionHandling();
        $tracks = factory(Tracks::class, 10)->create();

        $response = $this->get('api/audiostreaming');
        $response->assertStatus(200);
        $this->assertCount(10, Tracks::all());
        $this->assertArrayHasKey('name', (array)$response->getData()->data[0]);
    }
}
