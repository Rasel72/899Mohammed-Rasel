<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
    	'name'=>$faker($gender=null|'male'|'female'),
    	'short_name'=>$faker->short_name,
        
    ];
});
