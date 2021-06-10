<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = "suppliers";

    protected $fillable= [
          'name',
          'contact',
          'address',
          'contact_person',
          'category',
          'created_at',
          'updated_at'
    ];

    public function asset()
    {
        return $this->hasOne(Asset::class,'suppliers_id');
    }

}
