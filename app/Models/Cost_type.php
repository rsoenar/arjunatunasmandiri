<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost_type extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    protected $table = "cost_types";

    public $timestamps = true;
}
