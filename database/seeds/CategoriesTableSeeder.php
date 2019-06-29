<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];
        $data = ['Religi', 'Novel', 'Romance', 'Science', 'Fiksi', 'Sastra'];
        for ($i=0; $i < count($data); $i++) { 
            $name = $data[$i];
            $categories[$i] = [
                'name' => $name,
            ];
        }
        DB::table('categories')->insert($categories);
    }
}
