<?php

  namespace App\repositories;

  interface BaseRepository {
    public function getAll();

    public function create($attributes = []);

    public function edit($id, $attributes = []);

    public function delete($id);

    public function findById($id);

  }