<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Drivers extends Model
{
    //
    protected $guarded = [];
    public function trips(): HasMany
    {
        return $this->hasMany(Trip::class);
    }
}
