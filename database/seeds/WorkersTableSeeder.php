<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class WorkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Worker');

        DB::table('workers')->insert([
            'name' => 'Andrii Hazhur',
            'position' => 'CEO',
            'employment_date' => $faker->dateTimeBetween($startDate = '-15 years', $endDate = 'now', $timezone = null),
            'salary' => 300000,
            'chief_id' => null,
            'level' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        for ($i=2; $i <= 22; $i++) {
            DB::table('workers')->insert([
                'name' => $faker->firstname . ' ' . $faker->lastname,
                'position' => 'Deputy Chief',
                'employment_date' => $faker->dateTimeBetween($startDate = '-15 years', $endDate = 'now', $timezone = null),
                'salary' => $faker->numberBetween($min = 100000, $max = 200000),
                'chief_id' => 1,
                'level' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        for ($i=23; $i <= 1000; $i++) {
            DB::table('workers')->insert([
                'name' => $faker->firstname . ' ' . $faker->lastname,
                'position' => 'Head of ' . $faker->company . ' department',
                'employment_date' => $faker->dateTimeBetween($startDate = '-15 years', $endDate = 'now', $timezone = null),
                'salary' => $faker->numberBetween($min = 40000, $max = 60000),
                'chief_id' => $faker->numberBetween($min = 2, $max = 22),
                'level' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        for ($i=1001; $i <= 10000; $i++) {
            DB::table('workers')->insert([
                'name' => $faker->firstname . ' ' . $faker->lastname,
                'position' => 'Senior ' . $faker->jobTitle,
                'employment_date' => $faker->dateTimeBetween($startDate = '-15 years', $endDate = 'now', $timezone = null),
                'salary' => $faker->numberBetween($min = 2000, $max = 20000),
                'chief_id' => $faker->numberBetween($min = 23, $max = 1000),
                'level' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        for ($i=10001; $i <= 50000; $i++) {
            DB::table('workers')->insert([
                'name' => $faker->firstname . ' ' .  $faker->lastname,
                'position' => $faker->jobTitle,
                'employment_date' => $faker->dateTimeBetween($startDate = '-15 years', $endDate = 'now', $timezone = null),
                'salary' => $faker->numberBetween($min = 100, $max = 5000),
                'chief_id' => $faker->numberBetween($min = 1001, $max = 10000),
                'level' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
