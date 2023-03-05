<?php

namespace Tests\Unit;

use App\Models\Motorbike;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class MotorbikeTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function a_motorbike_has_correct_image_url()
    {
        $motorbike = Motorbike::factory()->create();
        $image_url = Storage::url($motorbike->image_path);

        $this->assertNotNull($motorbike);
        $this->assertEquals($motorbike->image_url, $image_url);
    }
}
