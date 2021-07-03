<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Property;
use App\Models\Tag;

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
        

        Subcategory::create(['name'=>'House', 'slug'=>'house', 'category_id'=>1]);
        Subcategory::create(['name'=>'Flat', 'slug'=>'flat','category_id'=>1]);
        Subcategory::create(['name'=>'House', 'slug'=>'house','category_id'=>1]);
        Subcategory::create(['name'=>'Flat', 'slug'=>'flat','category_id'=>2]);

        Tag::create(['name'=>'Balcony', 'created_at' => Now(), 'updated_at' => Now()]);
        Tag::create(['name'=>'Parking', 'created_at' => Now(), 'updated_at' => Now()]);
        Tag::create(['name'=>'Garage', 'created_at' => Now(), 'updated_at' => Now()]);
        Tag::create(['name'=>'Basement', 'created_at' => Now(), 'updated_at' => Now()]);
        Tag::create(['name'=>'Cable TV', 'created_at' => Now(), 'updated_at' => Now()]);
        Tag::create(['name'=>'Internet', 'created_at' => Now(), 'updated_at' => Now()]);
       


        \App\Models\User::factory(50)->create();
        \App\Models\Property::factory(100)->create()
        ->each(function ($property){
            $tag_ids = range(1,6);
            shuffle($tag_ids);
            $assignments = array_slice($tag_ids, 0, rand(0,6)); // eg 5,2,8
            foreach($assignments as $tag_id){
                DB::table('property_tag')
                    ->insert(
                        [
                            'property_id' => $property->id,
                            'tag_id' => $tag_id,
                            'created_at' => Now(),
                            'updated_at' => Now()
                        ]
                    );
            }
        });
        
        
        
        ;
        \App\Models\Image::factory(100)->create();
        
    }
}

