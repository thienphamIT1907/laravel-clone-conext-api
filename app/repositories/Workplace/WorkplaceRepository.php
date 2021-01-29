<?php

  namespace App\repositories\Workplace;

  use App\repositories\BaseRepository;

  interface WorkplaceRepository extends BaseRepository {
    public function getLocation();
  }