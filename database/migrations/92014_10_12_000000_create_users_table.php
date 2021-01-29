<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  class CreateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      Schema ::create('users', function(Blueprint $table) {
        $table -> increments('id');
        $table -> string('name');
        $table -> string('email') -> unique();
        $table -> string('address');
        $table -> string('gender');
        $table -> string('local_community');
        $table -> string('password');
        $table -> string('seek');
        $table -> string('introduction');
        $table -> rememberToken();

        // Relationship (n-1) with Expertise
        $table -> unsignedInteger('expertise_id') -> nullable();
        $table -> foreign('expertise_id') -> references('id') -> on('expertises');

        // Relationship (n-1) with BusinessType
        $table -> unsignedInteger('business_type_id') -> nullable();
        $table -> foreign('business_type_id') -> references('id') -> on('business_types');

        // Relationship (n-1) with Workplace
        $table -> unsignedInteger('workplace_id') -> nullable();
        $table -> foreign('workplace_id') -> references('id') -> on('workplaces');
      });

      DB ::connection('mysql') -> table('users') -> insert([
          [
            "name" => "Thien Pham",
            "email" => "thien@zahoo.com.vn",
            "password" => "123123",
            "address" => "Da Nang",
            "gender" => "Nam",
            "business_type_id" => 1,
            "expertise_id" => 4,
            "workplace_id" => 3,
            "local_community" => "Da Nang",
            "introduction" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
            "seek" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"
          ],
          [
            "name" => "Huy Hoang",
            "email" => "huyhoang@zahoo.com.vn",
            "password" => "123123",
            "address" => "Hue",
            "gender" => "Nam",
            "business_type_id" => 6,
            "expertise_id" => 4,
            "workplace_id" => 4,
            "local_community" => "Ha Noi",
            "introduction" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
            "seek" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"

          ],
          [
            "name" => "Hong Nhi",
            "email" => "hongnnhi@zahoo.com.vn",
            "password" => "123123",
            "address" => "Quang Tri",
            "gender" => "Nu",
            "business_type_id" => 5,
            "expertise_id" => 6,
            "workplace_id" => 3,
            "local_community" => "TP HCM",
            "introduction" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
            "seek" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"

          ],
          [
            "name" => "Tuan Tu",
            "email" => "tuantuthien@zahoo.com.vn",
            "password" => "123123",
            "address" => "TP HCM",
            "gender" => "Nu",
            "business_type_id" => 1,
            "expertise_id" => 3,
            "workplace_id" => 2,
            "local_community" => "Da Nang",
            "introduction" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout",
            "seek" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"
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
      Schema ::dropIfExists('users');
    }
  }
