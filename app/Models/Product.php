<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    // TODO: agregar fillables

    // relaciones
    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }

}
