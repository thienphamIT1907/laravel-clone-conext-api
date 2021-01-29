<?php

  namespace App\repositories\Explore;

  use App\Models\Explore;

  class ExploreRepositoryImpl implements ExploreRepository {

    public function getAll() {
      return Explore::all();
    }

    function create($attributes = []) {}

    function edit($id, $attributes = []) {}

    function delete($id) {}

    function findById($id) {}
  }