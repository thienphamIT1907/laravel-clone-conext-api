<?php

  namespace App\repositories\Event;

  use App\repositories\BaseRepository;

  interface EventRepository extends BaseRepository {
    public function getAllPastEvent();
  }