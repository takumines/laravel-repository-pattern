
<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name'      => $faker->sentence(6, true),
        'author_id' => $faker->numberBetween(1, 10)
    ];
});