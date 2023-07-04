<?php

namespace Database\Seeders;

use App\Models\Todolist;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodolistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 20; $i++) {
            Todolist::create([

                'done' => $faker->boolean(),
                'expire_date' => $faker->date(),
                'title' => $faker->sentence('2'),


                // $var = $faker->numberBetween(0, 1);
                // if($var==0) { 
                //     "image"->"https://picsum.photos/200/300";
                // };

                // if($var==0) { 
                //     // "image"->"https://picsum.photos/200/300"
                // };
            ]);


        }
        ;

    }
}