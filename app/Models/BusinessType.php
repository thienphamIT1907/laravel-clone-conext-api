<?php

  namespace App\Models;

  use Illuminate\Database\Eloquent\Factories\HasFactory;
  use Illuminate\Database\Eloquent\Model;
  use Illuminate\Support\Collection;

  class BusinessType extends Model {
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['type'];

    public function user() {
      return $this -> hasMany(User::class);
    }
  }
