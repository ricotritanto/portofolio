<?php

use Illuminate\Database\Seeder;
use App\education;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create([
            'name' => 'Universitas Dian Nuswantoro',
            'title' => 'Bachelor`s Degree, Technology Information, 2007 - 2011',
            'description' =>'Description'
        ]);
    }
}
