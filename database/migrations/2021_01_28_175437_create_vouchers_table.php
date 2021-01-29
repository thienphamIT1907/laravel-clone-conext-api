<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  class CreateVouchersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      Schema ::create('vouchers', function(Blueprint $table) {
        $table -> increments('id');
        $table -> string('img');
        $table -> string('title');
        $table -> string('status');
        $table -> text('content');
        $table -> string('type');
        $table -> dateTime('expired_date');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
      Schema ::dropIfExists('vouchers');
    }
  }
