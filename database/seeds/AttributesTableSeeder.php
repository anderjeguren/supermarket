<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert([ 'name' => 'Atributo1' ]);
        DB::table('attributes')->insert([ 'name' => 'Atributo2' ]);
        DB::table('attributes')->insert([ 'name' => 'Atributo3' ]);
    }
}
