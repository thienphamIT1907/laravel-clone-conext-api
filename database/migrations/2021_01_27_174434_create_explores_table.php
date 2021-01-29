<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  class CreateExploresTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      Schema ::create('explores', function(Blueprint $table) {
        $table -> increments('id');
        $table -> string('title');
        $table -> string('img');
      });


      DB ::connection('mysql') -> table('explores') -> insert([
          [
            "title" => "Startups",
            "img" => "https://storage.googleapis.com/conext-production/startup.jpg"
          ],
          [
            "title" => "Investments",
            "img" => "https://storage.googleapis.com/conext-production/investments.jpg"
          ],
          [
            "title" => "Hot Needs",
            "img" => "https://storage.googleapis.com/conext-production/bg_hot_need.png"
          ],
          [
            "title" => "Get Vouchers",
            "img" => "https://storage.googleapis.com/conext-production/bg_voucher.png"
          ],
          [
            "title" => "Events",
            "img" => "https://storage.googleapis.com/conext-production/bg_event.png"
          ],
          [
            "title" => "Workplaces",
            "img" => "https://storage.googleapis.com/conext-production/bg_coworking.png"
          ],
          [
            "title" => "Remote Workers",
            "img" => "https://storage.googleapis.com/conext-production/remote_worker.jpg"
          ],
          [
            "title" => "Coliving",
            "img" => "https://storage.googleapis.com/conext-production/coliving.jpg"
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
      Schema ::dropIfExists('explores');
    }
  }
