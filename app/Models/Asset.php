<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $table = "assets";

    protected $fillable= [
          'name',
          'description',
          'category',
          'suppliers_id',
          'storage_id',
          'total_stocks',
          'created_at',
          'updated_at'
    ];
}
