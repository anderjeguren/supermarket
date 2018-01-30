<?php

use Illuminate\Database\Seeder;

class BlocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blocks')->insert([ 'frame_id' => '1', 'height_cm' => '1', 'width_cm' => '1', 'depth_cm' => '1' ]);
    }
}
