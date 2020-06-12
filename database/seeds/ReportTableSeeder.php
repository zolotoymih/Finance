<?php

use Illuminate\Database\Seeder;

class ReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([

            [
                'type_report_id' => '0',
                'period_id' => '4',
                'edrpou_id' => '1',
            ],
            [
                'type_report_id' => '1',
                'period_id' => '4',
                'edrpou_id' => '1',
            ],
            [
                'type_report_id' => '2',
                'period_id' => '4',
                'edrpou_id' => '1',
            ],
            [
                'type_report_id' => '3',
                'period_id' => '4',
                'edrpou_id' => '1',
            ],
            [
                'type_report_id' => '4',
                'period_id' => '4',
                'edrpou_id' => '1',
            ],
        ]);
    }
}
