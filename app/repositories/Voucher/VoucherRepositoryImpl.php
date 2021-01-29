<?php

  namespace App\repositories\Voucher;

  use App\Models\Voucher;

  class VoucherRepositoryImpl implements VoucherRepository {

    public function getAll() {
      return Voucher ::all();
    }

    public function getByOption($option) {
      switch ($option) {
        case "featured":
          return Voucher ::where('type', 'Featured Vouchers') -> get();
        case "get":
          return Voucher ::where('type', 'Get Vouchers') -> get();
        default:
          return $this -> getAll();
      }
    }

    function create($attributes = []) { }

    function edit($id, $attributes = []) { }

    function delete($id) { }

    function findById($id) { }
  }