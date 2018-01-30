<?php

use Illuminate\Database\Seeder;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([ 'email' => 'Email1',  'password' => 'Pass1' ]);
    }
}
