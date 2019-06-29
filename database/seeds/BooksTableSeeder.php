<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
            $name = $faker->sentence(mt_rand(3, 6));
            $author = $faker->name;
            $published_at = $faker->year($mak = 'now');
            $isbn = $faker->isbn13;
            $books[$i] = [
                'name' => $name,
                'author' => $author,
                'published_at' => $published_at,
                'isbn' => $isbn
            ];
        }
        DB::table('books')->insert($books);
    }
}
