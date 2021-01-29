<?php

  namespace App\repositories\BusinessType;

  use App\Models\BusinessType;

  class BusinessTypeRepositoryImpl implements BusinessTypeRepository {

    function getAll() {
      return BusinessType::all();
    }

    function create($attributes = []) {}

    function edit($id, $attributes = []) {}

    function delete($id) {}

    function findById($id) {}
  }