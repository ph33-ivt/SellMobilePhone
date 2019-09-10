<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $listBrandID = Brand::pluck('id');
    $warranties = [3, 6, 9, 12, 24, 36, 48, 60];
    $discount_percent = [0, 5/100, 10/100, 15/100, 20/100, 25/100, 30/100];
    $listCategoryID = Category::pluck('id');
    $date = $faker->dateTime($max='now');
    return [
        //'category_id' => 1,
        'category_id' => $faker->randomElement($listCategoryID),
        'brand_id' => $faker->randomElement($listBrandID),
        'name' => $faker->name,
        'current_price' => rand(100, 500),
        'discount_percent' => $faker->randomElement($discount_percent),
        'description' => $faker->text,
        'warranty_period' => $faker->randomElement($warranties),
        'quantity' => rand(0, 1000),
        'image' => 'img/products',
        'date_create' => $date,
    ];
});
