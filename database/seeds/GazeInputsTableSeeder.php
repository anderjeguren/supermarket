<?php

use Illuminate\Database\Seeder;

class GazeInputsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gaze_inputs')->insert([  'customerinput_id' => '1',  'gazetime_ms' => '1000' ]);
    }
}
