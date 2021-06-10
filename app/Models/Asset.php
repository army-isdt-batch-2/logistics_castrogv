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

    public function suppliers()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function storage()
    {
        return $this->belongsTo(Storage::class);
    }

    public function distribution()
    {
        return $this->hasOne(Distribution::class,'distribution_id');
    }

    public function return()
    {
        return $this->hasOne(Returns::class,'asset_id');
    }
}
