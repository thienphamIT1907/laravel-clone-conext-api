<?php

  namespace App\Models;

  use Illuminate\Database\Eloquent\Factories\HasFactory;
  use Illuminate\Database\Eloquent\Model;

  class Expertise extends Model {
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['expertise'];

    public function user() {
      return $this -> hasMany(User::class);
    }

  }
