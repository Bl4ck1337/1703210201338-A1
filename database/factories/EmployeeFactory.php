<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;
use App\Department;

$factory->define(Employee::class, function (Faker $faker) {

	$dept_id = Department::get()->random()->id;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'salary' => $faker->unique()->numberBetween(1000, 9999),
        'status' => $faker->randomElements(['active', 'deactive'])[0],
        'department_id' => $dept_id,
    ];
});
