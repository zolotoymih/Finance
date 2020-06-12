<?php

use Illuminate\Database\Seeder;

class OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->insert([

            [

                'name' => 'A4444',
                'edrpou' => '26614573',

            ],
        ]);
    }
}
