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
        DB::table('education')->insert([
            [
                'name' => 'Universitas Dian Nuswantoro, 2007 - 2011',
                'title' => 'Bachelor`s Degree, Technology Information',
                'description' =>'Description'
            ],
            [
                'name' => 'SMA Kesatrian 1 Semarang, 2004 - 2007',
                'title' => 'Senior High School, Natural Sciences, ',
                'description' =>'Description'
            ],
            [
                'name' => 'SMP Kesatrian 2 Semarang, 2001 - 2004',
                'title' => 'Junior high school,',
                'description' =>'Description'
            ],
            [
                'name' => 'SD SABAN 02 Gubug, 1995 - 2001',
                'title' => 'Elementary School ',
                'description' =>'Description'
            ]
        ]);
    }
}
