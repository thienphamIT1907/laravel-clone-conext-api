<?php

  namespace Database\Seeders;

  use Faker\Factory as Faker;
  use Illuminate\Database\Seeder;
  use Illuminate\Support\Facades\DB;

  class VoucherSeeder extends Seeder {
    public function run() {

      DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      DB::table('vouchers')->truncate();

      $faker = Faker ::create();
      foreach (range(1, 20) as $index) {
        DB ::table('vouchers') -> insert([
          'img' => $faker -> imageUrl(),
          'status' => $faker -> randomElement(['Expired', 'Available']),
          'title' => $faker -> sentence,
          'content' => $faker -> paragraph,
          'type' => $faker -> randomElement(['Get Vouchers', 'Featured Vouchers']),
          'expired_date' => $faker -> date('Y-m-d'),
        ]);
      }

      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
  }
