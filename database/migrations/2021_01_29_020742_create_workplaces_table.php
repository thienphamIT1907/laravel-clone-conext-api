<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  class CreateWorkplacesTable extends Migration {
    public function up() {
      Schema ::create('workplaces', function(Blueprint $table) {
        $table -> increments('id');
        $table -> decimal('price');
        $table -> string('name');
        $table -> string('address');
        $table -> decimal('long');
        $table -> decimal('lat');
      });

      DB ::connection('mysql') -> table('workplaces') -> insert([
          [
            "price" => "75000",
            "name" => "DNC Danang Coworking Space",
            "address" => "31 Tran Phu Street, Hai Chau, Da Nang",
            "long" => 6.056082,
            "lat" => 108.230480
          ],
          [
            "price" => "80000",
            "name" => "IOT Space",
            "address" => "63 Phan Dang Luu, Cuong Cuong Bac, Hai Chau, Da Nang",
            "long" => 16.057863,
            "lat" => 108.233679
          ],
          [
            "price" => "120000",
            "name" => "Hub Hoi An Coworking",
            "address" => "105 Le Thanh Tong Street, Cam Son, Hoi An, Viet Nam",
            "long" => 16.057551,
            "lat" => 108.238363
          ],
          [
            "price" => "110000",
            "name" => "Beans Workspace",
            "address" => "3rd Floor, 84 Chau Thi Vinh Te, My An, Ngu Hanh Son District, Da Nang City",
            "long" => 16.053611,
            "lat" => 108.207132
          ],
          [
            "price" => "90000",
            "name" => "Seahorse Office",
            "address" => "29 Yen Bai, Hai Chau 1 Ward, Hai Chau District, Da Nang",
            "long" => 16.025381,
            "lat" => 108.204863
          ],
        ]
      );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
      Schema ::dropIfExists('workplaces');
    }
  }
