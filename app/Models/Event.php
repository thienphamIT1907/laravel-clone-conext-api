<?php

  namespace App\Models;

  use Illuminate\Database\Eloquent\Factories\HasFactory;
  use Illuminate\Database\Eloquent\Model;

  class Event extends Model {
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
      "img",
      "status",
      "title",
      "content",
      "type",
      "start_date",
      "end_date"
    ];
  }
