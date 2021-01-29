<?php

  namespace App\repositories\Workplace;

  use App\Models\Workplace;

  class WorkplaceRepositoryImpl implements WorkplaceRepository {

    public function getAll() {
     return Workplace::all();
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

    public function getLocation() {
      return Workplace ::all('id', 'long', 'lat');
    }
  }