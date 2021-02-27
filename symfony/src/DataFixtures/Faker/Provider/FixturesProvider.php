<?php

declare(strict_types=1);

namespace App\DataFixtures\Faker\Provider;
use Faker;

class FixturesProvider
{

    public static function productName()
    {
        $faker = Faker\Factory::create();
        return $faker->word();
    }

    public static function productPrice()
    {
        return random_int(1,500);
    }

    public static function productReference()
    {
        return uniqid('',false);
    }
}