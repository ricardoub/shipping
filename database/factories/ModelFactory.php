<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Task::class, function (Faker\Generator $faker) {
  return [
    'name'     => $faker->text($maxNbChars = 100),
    'priority' => $faker->unique->numberBetween(1,50),
    'percent'  => (10*$faker->numberBetween(0,10)),
    'status'   => $faker->numberBetween(1,6),
    'user_id'  => $faker->numberBetween(1,4),
  ];
});
