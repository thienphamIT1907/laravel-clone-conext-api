<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  class CreateExpertisesTable extends Migration {
    public function up() {
      Schema ::create('expertises', function(Blueprint $table) {
        $table -> increments('id');
        $table -> string('expertise');
      });

      DB ::connection('mysql') -> table('expertises') -> insert([
        [
          'expertise' => 'Artificial Intelligence',
        ],
        [
          'expertise' => 'Internet of Things',
        ],
        [
          'expertise' => 'NGO',
        ],
        [
          'expertise' => 'Hospitality',
        ],
        [
          'expertise' => 'Real Estate',
        ],
        [
          'expertise' => 'Investment',
        ],
        [
          'expertise' => 'Legacy',
        ],
        [
          'expertise' => 'Marketing',
        ],
        [
          'expertise' => 'Business & Management',
        ],
        [
          'expertise' => 'Software Development',
        ],
        [
          'expertise' => 'UI / UX Design',
        ],
        [
          'expertise' => 'Artchitecture',
        ],
        [
          'expertise' => 'Content / Copywriting',
        ],
        [
          'expertise' => 'E-Commerce',
        ],
        [
          'expertise' => 'Finance / Accountancy',
        ],
        [
          'expertise' => 'Translating / Interpreting',
        ],

      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
      Schema ::dropIfExists('expertises');
    }
  }
