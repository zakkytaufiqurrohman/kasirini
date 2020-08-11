<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Person;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker)
{
    return [
        //
            'first_name' => $faker->name,
            'last_name' => $faker->name,
    ];
});
