<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminsTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(CharacteristicsTableSeeder::class);
        $this->call(CategoryGroupsTableSeeder::class);
        $this->call(ManagersTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(EnvironmentsTableSeeder::class);
        $this->call(FrameTypesTableSeeder::class);
        $this->call(GamemodesTableSeeder::class);
        $this->call(SceneriesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(FramesTableSeeder::class);
        $this->call(BlocksTableSeeder::class);
        $this->call(ShelvesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductDetailsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ShelveProductsTableSeeder::class);
        $this->call(PlaygroundsTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(CustomerInputsTableSeeder::class);
        $this->call(GazeInputsTableSeeder::class);
        $this->call(ControllerInputsTableSeeder::class);
        $this->call(CustomerCharacteristicsTableSeeder::class);
        $this->call(ProductAttributesTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
        $this->call(SessionGamesTableSeeder::class);
    }
}
