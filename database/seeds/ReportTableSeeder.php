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
                'type_report_id' => '1',
                'period_id' => '4',
                'row' => '1000',
                'state' => 'A',
                'value' => '400',
            ],
            [
                'type_report_id' => '1',
                'period_id' => '4',
                'row' => '1001',
                'state' => 'A',
                'value' => '100',
            ],
            [
                'type_report_id' => '1',
                'period_id' => '4',
                'row' => '1002',
                'state' => 'A',
                'value' => '300',
            ],
            [
                'type_report_id' => '1',
                'period_id' => '4',
                'row' => '1010',
                'state' => 'A',
                'value' => '1100',
            ],
            [
                'type_report_id' => '1',
                'period_id' => '4',
                'row' => '1011',
                'state' => 'A',
                'value' => '500',
            ],
            [
                'type_report_id' => '1',
                'period_id' => '4',
                'row' => '1012',
                'state' => 'A',
                'value' => '600',
            ],
            [
                'type_report_id' => '1',
                'period_id' => '4',
                'row' => '1095',
                'state' => 'A',
                'value' => '1500',
            ],
        ]);
    }
}
