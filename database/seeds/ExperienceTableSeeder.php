<?php

use Illuminate\Database\Seeder;
use App\experience;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        experience::create([
            'name' =>'PT Bank Panin, 2012 - Recently',
            'description' => 'Fully supporting the company`s at all levels as part of a helpdesk team. Ensuring that all hardware and software is configured and installed correctly. Responsible and maintaining for company networking and infrastructure. Create additional software application to support company special event or as a additional software to support existing application.'
        ]);
    }
}
