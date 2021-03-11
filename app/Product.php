<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;

class Product extends Model
{
    public function brand() {
        return $this->belongsTo(Brand::class, 'po_brand');
    }
}
