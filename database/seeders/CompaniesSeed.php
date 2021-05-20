<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Company;

class CompaniesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create(
            [
                'name' => 'demo',
                'email' => 'demo@gmail.com',
                'password' => bcrypt('demo'),
                'website' => 'demo.com',
                'logo' => 'demo.jpg',
            ],
            // [
            //     'name' => Str::random(10),
            //     'email' => Str::random(10).'@gmail.com',
            //     'password' => bcrypt('secret'),
            //     'website' => Str::random(20),
            //     'logo' => Str::random(20),
            // ]
        );
    }
}
