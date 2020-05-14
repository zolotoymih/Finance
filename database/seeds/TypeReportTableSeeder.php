<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_reports')->insert([

        [
                'name' => 'БАЛАНС',  'code' => '1ДС', 'name_form'=> 'balans',  'kind_reports_id'=> '1',
                'on_year' => 1, 'on_quarter' => 1, 'on_month' => 0,
                'status' =>1,
           ],
            [
                'name' => 'ЗВІТ ПРО ФІНАНСОВИЙ РЕЗУЛЬТАТ',  'code' => '2ДС', 'name_form'=> '', 'kind_reports_id'=> '1',
                'on_year' => 1, 'on_quarter' => 1, 'on_month' => 0,
                'status' =>1,
            ],
            [
                'name' => 'ЗВІТ ПРО РУХ ГРОШОВИХ КОШТІВ',  'code' => '3ДС', 'name_form'=> '', 'kind_reports_id'=> '1',
                'on_year' => 1, 'on_quarter' => 0, 'on_month' => 0,
                'status' =>1,
            ],
            [
                'name' => 'ЗВІТ ПРО ВЛАСНИЙ КАПІТАЛ',  'code' => '4ДС', 'name_form'=> '', 'kind_reports_id'=> '1',
                'on_year' => 1, 'on_quarter' => 0, 'on_month' => 0,
                'status' =>1,
            ],
            [
                'name' => 'ПРИМІТКИ ДО РІЧНОЇ ФІНАНСОВОЇ ЗВІТНОСТІ',  'code' => '5ДС', 'name_form'=> '', 'kind_reports_id'=> '1',
                'on_year' => 1, 'on_quarter' => 0, 'on_month' => 0,
                'status' =>1,
            ],
            [
                'name' => 'ЗВІТ про надходження та використання коштів загального фонду (форма №2д, №2м)',  'code' => '2Д', 'name_form'=> '', 'kind_reports_id'=> '2',
                'on_year' => 1, 'on_quarter' => 1, 'on_month' => 0,
                'status' =>1,
            ],
            [
                'name' => 'ЗВІТ про надходження та використання коштів, отриманих як плата за послуги (форма №4-1д, №4-1м)',  'code' => '4-1Д', 'name_form'=> '', 'kind_reports_id'=> '2',
                'on_year' => 1, 'on_quarter' => 1, 'on_month' => 0,
                'status' =>1,
            ],
            [
                'name' => 'ЗВІТ про надходження та використання коштів, отриманих за іншими джерелами власних надходжень (форма №4-2д, №4-2м)',  'code' => '4-2Д', 'name_form'=> '', 'kind_reports_id'=> '2',
                'on_year' => 1, 'on_quarter' => 1, 'on_month' => 0,
                'status' =>1,
            ],
            [
                'name' => 'ЗВІТ про надходження та використання інших надходжень спеціального фонду (форма №4-3д, №4-3м)',  'code' => '4-3Д', 'name_form'=> '', 'kind_reports_id'=> '2',
                'on_year' => 1, 'on_quarter' => 1, 'on_month' => 0,
                'status' =>1,
            ],
            [
                'name' => 'ЗВІТ про надходження та використання коштів, отриманих на виконання програм соціально-економічного та культурного розвитку регіону (форма №4-4д, №4-4м)',  'code' => '4-4Д', 'name_form'=> '', 'kind_reports_id'=> '2',
                'on_year' => 1, 'on_quarter' => 1, 'on_month' => 0,
                'status' =>1,
            ],
            [
                'name' => 'ЗВІТ про заборгованість за бюджетними коштами (форма №7д, №7м)',  'code' => '7Д', 'name_form'=> '', 'kind_reports_id'=> '2',
                'on_year' => 1, 'on_quarter' => 1, 'on_month' => 1,
                'status' =>1,
            ],
            [
                'name' => 'Пояснювальна записка',  'code' => 'notes', 'name_form'=> '', 'kind_reports_id'=> '2',
                'on_year' => 1, 'on_quarter' => 1, 'on_month' => 0,
                'status' =>1,
            ],
        ]);
    }
}
