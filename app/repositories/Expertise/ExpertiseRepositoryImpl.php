<?php

  namespace App\repositories\Expertise;

  use App\Models\Expertise;

  class ExpertiseRepositoryImpl implements ExpertiseRepository {

    function getAll() {
      return Expertise::all();
    }

    function create($attributes = []) {}

    function edit($id, $attributes = []) {}

    function delete($id) {}

    function findById($id) {}
  }