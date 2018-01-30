<?php

use Illuminate\Database\Seeder;

class EnvironmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('environments')->insert([ 'name' => 'Environment1', 'description' => 'Description1']);
    }
}
