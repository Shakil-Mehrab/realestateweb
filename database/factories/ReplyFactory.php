<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Reply::class, function (Faker $faker) {
    return [
        'star' => $faker->numberBetween(1,5),                               
        'body' => $faker->paragraph,   
        'comment_id' => function(){
            return App\Comment::all()->random();
        },
         'user_id' => function(){
            return App\User::all()->random();
        }
    ];
});
