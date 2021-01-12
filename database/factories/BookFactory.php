<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::all()->random()->id,
        'titulo' => $faker->sentence(4),
        "descripcion" => $faker->sentence(6),
        'abstracto' => $faker->text(),
        'isbn' => $faker->isbn13,
        'fecha_publicacion' => $faker->dateTime(),
        'autor' => $faker->name,
        'editorial' => $faker->randomElement(['Maxima','Iluminated','McCaffee','Norton','Trillas','Esthellas']),
    ];
});
