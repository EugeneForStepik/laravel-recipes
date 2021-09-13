<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\State;
use Faker\Generator as Faker;

$factory->define(State::class, function (Faker $faker) {
    return [
        'likes' => $faker -> numberBetween( 1, 20 ),
		'views' => $faker -> numberBetween( 21, 100 ),
    ];
});
