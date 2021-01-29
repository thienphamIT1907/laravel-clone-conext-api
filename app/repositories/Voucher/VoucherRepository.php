<?php

  namespace App\repositories\Voucher;

  use App\repositories\BaseRepository;

  interface VoucherRepository extends BaseRepository {
    public function getByOption($option);
  }