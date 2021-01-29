<?php

  namespace App\Models;

  use Illuminate\Database\Eloquent\Factories\HasFactory;
  use Illuminate\Database\Eloquent\Model;

  class Workplace extends Model {
    use HasFactory;

    public $timestamps = false;

    public function user() {
      return $this -> hasMany(User::class);
    }
  }
