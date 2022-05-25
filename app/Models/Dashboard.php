<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $table = "dokters";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'name', 'email', 'jadwal', 'no_telepon'
    ];
}
