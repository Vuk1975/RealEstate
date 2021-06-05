<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // $this->call(UsersTableSeeder::class);
        Category::create(['name'=>'Rent','slug'=>'rent','description'=>'Rent']);
        Category::create(['name'=>'Sale','slug'=>'sale','description'=>'Sale']);
        

        Subcategory::create(['name'=>'House','category_id'=>1]);
        Subcategory::create(['name'=>'Flat','category_id'=>2]);


        \App\Models\User::factory(50)->create();
        \App\Models\Property::factory(100)->create();
        \App\Models\Image::factory(100)->create();
        
    }
}
