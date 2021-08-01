<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Courses;
use Faker\Generator as Faker;

$factory->define(Courses::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'title' => $faker->word,
        'description' => $faker->text,
        'objective' => $faker->text,
        'playlist_url' => $faker->word,
        'view_count' => $faker->randomDigitNotNull,
        'status' => $faker->randomDigitNotNull,
        'subscriber_count' => $faker->randomDigitNotNull,
        'photo' => $faker->word,
        'actual_price' => $faker->randomDigitNotNull,
        'discount_price' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
