<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
//use DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*$faker = Faker::create()
       foreach (range(1, 10) as $index) {       
           DB::table('post')->insert([
               'title'=>$faker->title;
               'content'=>$faker->text;
               'author'=>$faker->name;
           ])
       }*/
       $faker=Faker::create();
       for($i = 0; $i < 20; $i++){
        DB::table('post')->insert([
            'title'=>$faker->word,
            'content'=>$faker->text,
            'image'=>$faker->imageUrl($width=640, $height=480),
            'author'=>$faker->name
        ]);           
       }
    }
}
