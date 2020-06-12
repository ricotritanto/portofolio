<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'description' => 'My current job is as an IT Support engineer at the one of Bank in Indonesia.
            My programming background started from when am in college and still continue it as a
            freelance php developer.Why i am change my role from an IT support to become a programmer is mainly because i
            feel like i’m stuck at my current level now and fully motivated to become a better
            programmer.Now I am looking for a more successful career by working for an ambitious and growing
            company.Want to know more? Lets talk :)'
        ]);
    }
}
