<?php

use Illuminate\Database\Seeder;

class FramesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frames')->insert([ 'scenery_id' => '1', 'frametype_id' => '1', 'height_cm' => '1', 'width_cm' => '1', 'depth_cm' => '1']);
    }
}
