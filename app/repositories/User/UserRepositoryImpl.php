<?php

  namespace App\repositories\User;

  use App\Models\User;

  class UserRepositoryImpl implements UserRepository{

    public function getAll() {
      return User::all();
    }

    public function getAllRandom() {
      return User::inRandomOrder()->get();
    }

    public function create($attributes = []) {
      // TODO: Implement create() method.
    }

    public function edit($id, $attributes = []) {
      // TODO: Implement edit() method.
    }

    public function delete($id) {
      // TODO: Implement delete() method.
    }

    public function findById($id) {
      // TODO: Implement findById() method.
    }
  }