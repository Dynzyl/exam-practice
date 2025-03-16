<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExampleSeeder extends Seeder
{
    public function run()
    {
        DB::table('example')->insert([
            ['name' => 'John Doe', 'age' => 25],
            ['name' => 'Jane Doe', 'age' => 30],
        ]);
    }
}
