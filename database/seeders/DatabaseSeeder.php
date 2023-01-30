<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Owner;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Mechanic::factory(10)->create();

        Car::factory(10)->create()->each(function ($car) {
            $owner = Owner::factory()->make();
            $car->owner()->save($owner);
        });
    }
}
