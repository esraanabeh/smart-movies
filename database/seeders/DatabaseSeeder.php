<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call(UpdateOrdersPermissions::class);
        // $this->call(AdsTableSeeder::class);
        // $this->call(GroupsTableSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        // $this->call(SliderTableSeeder::class);
        // $this->call(ActionsTableSeeder::class);
        // $this->call(AddressesTableSeeder::class);
        // $this->call(BanksTableSeeder::class);
        // $this->call(BrandsTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(ContactsTableSeeder::class);
        // $this->call(MallsTableSeeder::class);
        // $this->call(OffersTableSeeder::class);
        // $this->call(OrdersTableSeeder::class);
        // $this->call(PermissionsTableSeeder::class);
        // $this->call(ProductBrandsTableSeeder::class);
        // $this->call(ProductColorsTableSeeder::class);
        // $this->call(ProductSizesTableSeeder::class);
        // $this->call(TutorialsTableSeeder::class);
        // $this->call(ProductTypesTableSeeder::class);
        //$this->call(SiteTableSeeder::class);
        // \App\Models\User::factory(10)->create();
        //$this->call(GroupSeeder::class);
        // $this->call(UserSeeder::class);
        //$this->call(PermissionSeeder::class);
        // $this->call(SiteSeeder::class);
        // $this->call(UpdateGroupsTableSeeder::class);
        // $this->call(UpdatePermissionsTableSeeder::class);
    }
    // \App\Models\User::factory(10)->create();
    // $this->call(GroupSeeder::class);
    //$this->call(UserSeeder::class);
    // $this->call(PermissionSeeder::class);
    //$this->call(SiteSeeder::class);

}
