<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Head_order extends Model
{
    use HasFactory;

    public function Customer(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
}
