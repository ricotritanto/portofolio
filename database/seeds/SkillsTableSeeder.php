<?php

use Illuminate\Database\Seeder;
use App\skills;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        skills::create([
                'name' => 'php',
                'progress' => '90'
        ]);
    }
}
