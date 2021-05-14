<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use function number_format;

class OrderDetail extends Model
{
    public function getIdAttribute($value){
        return $this->product_name . " | SL: " . $this->product_quantity . " | Thành tiền: " . number_format($this->product_quantity * $this->product_price);
    }
}
