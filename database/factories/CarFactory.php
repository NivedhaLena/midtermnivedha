<?php

use Faker\Generator as Faker;

$factory->define(App\Cars::class, function (Faker $faker) {
    return [
        'Make'=>$faker->randomelement($array=array('Honda','Toyota','ford')),
        'Model'=>$faker->bankAccountNumber,
        'Year'=>$faker->year,
    ];
});
