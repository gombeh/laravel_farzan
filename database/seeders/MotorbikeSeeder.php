<?php

namespace Database\Seeders;

use App\Models\Motorbike;
use Illuminate\Database\Seeder;

class MotorbikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motorbike::factory(20)->create();
    }
}
