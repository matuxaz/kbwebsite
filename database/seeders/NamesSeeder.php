<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('names')->insert([
            'id' => 1,
            'firstname' => 'john',
            'lastname' => 'person',
            'age' => 12
        ]);
    }
}
