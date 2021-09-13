<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'subject' => $faker -> sentence( '3' ),
		'body' => $faker -> paragraph( '3', false ),
    ];
});
