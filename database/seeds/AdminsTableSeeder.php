<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([ 'name' => 'Admin1', 'password' => 'Pass1', 'company' => 'company1' ]);
        DB::table('admins')->insert([ 'name' => 'Admin2', 'password' => 'Pass2', 'company' => 'company2' ]);
    }
}
