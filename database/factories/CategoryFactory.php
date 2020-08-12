<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'photo'=>'backend1/categoryimg/'.$faker->image('public/backend1/categoryimg',400,300,null,false),
    ];
});
