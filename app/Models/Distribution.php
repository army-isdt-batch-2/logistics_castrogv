<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;

    protected $table = "distributions";

    protected $fillable= [
          'requestor_name',
          'requestor_contact',
          'purpose',
          'assets_id',
          'quantity',
          'status',
          'created_at',
          'updated_at'
    ];
}
