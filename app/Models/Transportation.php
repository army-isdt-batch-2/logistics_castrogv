<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    use HasFactory;

    protected $table = "transportations";

    protected $fillable= [
          'plate_number',
          'driver_name',
          'driver_contact',
          'notes',
          'created_at',
          'updated_at'
    ];
}
