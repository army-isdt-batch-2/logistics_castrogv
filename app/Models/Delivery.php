<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $table = "deliveries";

    protected $fillable= [
          'distributions_id',
          'transportations_id',
          'date_distributed',
          'status',
          'created_at',
          'updated_at'
    ];
}
