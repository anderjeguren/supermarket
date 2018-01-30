<?php

use Illuminate\Database\Seeder;

class CategoryGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_groups')->insert([ 'name' => 'CategoryGroup1' ]);
    }
}
