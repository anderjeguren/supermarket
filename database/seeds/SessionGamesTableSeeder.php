<?php

use Illuminate\Database\Seeder;

class SessionGamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('session_games')->insert([ 'session_id' => '1', 'playground_id' => '1', 'gamemode_id' => '1' ]);
    }
}
