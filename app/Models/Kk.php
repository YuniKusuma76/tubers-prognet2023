<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nokk', 'statusaktif', 'updated_at', 'created_at',
    ];
}
