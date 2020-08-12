<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'photo'=>'backend1/brandimg/'.$faker->image('public/backend1/brandimg',400,300,null,false),
    ];
});
