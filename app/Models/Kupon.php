<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    // use HasFactory;
    protected $table = "kupons";
    protected $primaryKey = "id";
    protected $fillable = [
        'code', 'value'
    ];
}
