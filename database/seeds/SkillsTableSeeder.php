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
        DB::table('skills')->insert([
            [
                'name' => 'php',
                'progress' => '80'
            ],
            [
                'name' => 'MySql',
                'progress' => '80'
            ],
            [
                'name' => 'CodeIgniter',
                'progress' => '70'
            ],
            [
                'name' => 'Laravel',
                'progress' => '70'
            ]
        ]);
    }
}
