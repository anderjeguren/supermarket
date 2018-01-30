<?php

use Illuminate\Database\Seeder;

class FrameTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frame_types')->insert([ 'name' => 'Frametype1' ]);
    }
}
