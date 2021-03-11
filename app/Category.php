<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subCats() {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
