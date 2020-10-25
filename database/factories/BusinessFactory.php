<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Business;
$factory->define(App\Business::class, function (Faker $faker) {
    return [
        'branche'=> $faker->text(10)
        ,'unbearbeitet'=> $faker->randomDigit
        , 'Gf_helt'=> $faker->randomDigit
        ,'Nicht_erreit'=> $faker->randomDigit
        ,'Wiedervolage'=> $faker->randomDigit
        ,'Kein_interesse'=> $faker->randomDigit
        ,'Zu_viele_Versuche'=> $faker->randomDigit
        ,'Termine'=> $faker->randomDigit
        ,'Kunden'=> $faker->randomDigit
        ,'Black_List'=> $faker->randomDigit
        ,'Insgesamt'=> $faker->randomDigit

    ];
});
