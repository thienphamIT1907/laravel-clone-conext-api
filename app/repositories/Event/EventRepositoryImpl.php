<?php

  namespace App\repositories\Event;

  use App\Models\Event;

  class EventRepositoryImpl implements EventRepository {

    function getAll() {
      return Event::all();
    }

    public function getAllPastEvent() {
      return Event ::where('status', 'Past Event') -> get();
    }

    function create($attributes = []) {}

    function edit($id, $attributes = []) {}

    function delete($id) {}

    function findById($id) {}
  }