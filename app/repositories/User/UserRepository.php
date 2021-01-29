<?php

  namespace App\repositories\User;

  use App\repositories\BaseRepository;

  interface UserRepository extends BaseRepository {

    public function getAllRandom();

  }