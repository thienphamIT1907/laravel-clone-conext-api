<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  class CreateEventsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      Schema ::create('events', function(Blueprint $table) {
        $table -> increments('id');
        $table -> string('img');
        $table -> string('status');
        $table -> string('title');
        $table -> text('content');
        $table -> string('type');
        $table -> dateTime('start_date');
        $table -> dateTime('end_date');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
      Schema ::dropIfExists('events');
    }
  }
