<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'type' => "month",
            'name' => "Monthly Return Plan",
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);
        DB::table('plans')->insert([
            'type' => "year",
            'name' => "One time Investment",
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);
        DB::table('plans')->insert([
            'type' => "year",
            'name' => "Monthly Investment",
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ]);
    }
}
