<?php

  namespace Database\Seeders;

  use Illuminate\Database\Seeder;
  use Faker\Factory as Faker;
  use Illuminate\Support\Facades\DB;

  class EventSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      DB::table('events')->truncate();

      $faker = Faker ::create();
      foreach (range(1, 20) as $index) {
        DB ::table('events') -> insert([
          'img' => $faker -> imageUrl(),
          'status' => $faker->randomElement(['Upcoming Event', 'Past Event']),
          'title' => $faker -> sentence,
          'content' => $faker -> paragraph,
          'type' => "Online Event",
          'start_date' => $faker -> date('Y-m-d'),
          'end_date' => $faker -> date('Y-m-d')
        ]);
      }

      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
  }
