<?php

use Illuminate\Database\Seeder;

class PlaygroundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('playgrounds')->insert([  'admin_id' => '1',  'environment_id' => '1',  'scenery_id' => '1' ]);
    }
}
