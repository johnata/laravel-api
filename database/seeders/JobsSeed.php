<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Job;

class JobsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'title' => Str::random(10),
            'description' => Str::random(1000),
            'local' => 'Curitiba / PR',
            'title' => Str::random(10),
            'remote' => 'no',
            'type' => 3,
            'company_id' => 1,
        ]);
    }
}
