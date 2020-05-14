<?php

use Illuminate\Database\Seeder;

class KindReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kind_reports')->insert([

            [
                'name' => 'Фінансова звітність',  'code' => 'FinReport',

            ],
            [
                'name' => 'Бюджетна звітність',  'code' => 'BudgReport',

            ],
            [
                'name' => 'Додаткові звіти',  'code' => 'ElseReport',

            ],

        ]);
    }
}
