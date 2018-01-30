<?php

use Illuminate\Database\Seeder;

class ControllerInputsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('controller_inputs')->insert([ 'customerinput_id' => '1', 'grabbedtime_ms' => '1000' ]);
    }
}
