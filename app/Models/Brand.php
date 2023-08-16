<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = [
        'id',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public $timestamps = false;
}
