<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeReportTableSeeder::class);
        $this->call(KindReportTableSeeder::class);
        $this->call(PeriodTableSeeder::class);
        $this->call(ReportTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
