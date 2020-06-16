<?php

use Illuminate\Database\Seeder;

class PeriodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periods')->insert([

            [
                'name' => 'грудень 2019 р.',  'month' => 'грудень', 'year' => '2019',
                'date_on' => '2019-12-01 00:01:00', 'date_off' => '2020-12-31 23:59:00',
                'on_year'=> '0', 'on_quarter'=> '0','on_month'=> '1',
            ],
            [
                'name' => 'січень 2020 р.',  'month' => 'січень', 'year' => '2020',
                'date_on' => '2020-01-01 00:01:00', 'date_off' => '2020-01-31 23:59:00',
                'on_year'=> '0', 'on_quarter'=> '0','on_month'=> '1',
            ],
            [
                'name' => 'лютий 2020 р.',  'month' => 'лютий', 'year' => '2020',
                'date_on' => '2020-02-01 00:01:00', 'date_off' => '2020-02-29 23:59:00',
                'on_year'=> '0', 'on_quarter'=> '0','on_month'=> '1',
            ],
            [
                'name' => 'березень 2020 р.',  'month' => 'березень', 'year' => '2020',
                'date_on' => '2020-03-01 00:01:00', 'date_off' => '2020-03-31 23:59:00',
                'on_year'=> '0', 'on_quarter'=> '0','on_month'=> '1',
            ],
            [
                'name' => 'І квартал 2020 р.',  'month' => 'І квартал', 'year' => '2020',
                'date_on' => '2020-01-01 00:01:00', 'date_off' => '2020-03-31 23:59:00',
                'on_year'=> '0', 'on_quarter'=> '1','on_month'=> '0',
            ],
            [
                'name' => 'І квартал 2021 р.',  'month' => 'І квартал', 'year' => '2019',
                'date_on' => '2021-01-01 00:01:00', 'date_off' => '2021-03-31 23:59:00',
                'on_year'=> '0', 'on_quarter'=> '1','on_month'=> '0',
            ],

        ]);
    }
}
