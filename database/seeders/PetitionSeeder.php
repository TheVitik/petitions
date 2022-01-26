<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<10; $i++) {
            DB::table('petitions')->insert([
                'author_id' => 1,
                'title' => Str::random(100),
                'slug' => 'petition-'.$i]);
        }
    }
}
