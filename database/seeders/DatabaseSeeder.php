<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Celebration;
use App\Models\Gift;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::create([
             'name' => 'example',
             'email' => 'example@gmail.com',
             'password' => Hash::make('password')
         ]);
        $categories = Category::factory(10)->create();
        $calebrations = Celebration::factory(10)->create();

        $index = 0;
        foreach($categories as $category) {
            
            $category->celebrations()->sync([$category->id]);
            $index++;
        }

        $gifts =  Gift::factory(10)->create();

        foreach($gifts as $gift) {
            $gift->categories()->sync([1,2, 3, 4]);
        }

        $gifts =  Gift::factory(10)->create();

        foreach($gifts as $gift) {
            $gift->categories()->sync([4,5, 6, 7]);
        }

        $gifts =  Gift::factory(10)->create();

        foreach($gifts as $gift) {
            $gift->categories()->sync([8,9, 10]);
        }

    }
}
