<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {
	
	$title = $faker -> sentence( 6, true );
	$slug = Str ::substr( Str :: lower( preg_replace( '/\s+/', '-', $title ) ), 0, -1 );
	
    return [
        'title' => $title,
        'body' => $faker -> paragraph( 100, true ),
        'slug' => $slug, //Str :: slug( $title );
        'img' => 'https://via.placeholder.com/150/8888FF/080808?text=laravel', // password
        'created_at' => $faker -> dateTimeBetween( '-1 years' ),
    ];
});
