<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pservices extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'service_name',
    ];
}
