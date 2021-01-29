<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  class CreateBusinessTypesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      Schema ::create('business_types', function(Blueprint $table) {
        $table -> increments('id') -> unsigned();
        $table -> string('type');

      });

      DB ::connection('mysql') -> table('business_types') -> insert([
          [
            "type" => "Incubator / Accelerator"
          ],
          [
            "type" => "Startup"
          ],
          [
            "type" => "Corporate"
          ],
          [
            "type" => "Investor / Venture"
          ],
          [
            "type" => "Startup Eco-System"
          ],
          [
            "type" => "Government"
          ],
          [
            "type" => "Freelancer"
          ],
          [
            "type" => "Other"
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
      Schema ::dropIfExists('business_types');
    }
  }
