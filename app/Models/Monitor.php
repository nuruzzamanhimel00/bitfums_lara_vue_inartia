<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_url',
        'status',
        'response',
        'response_code',
        'meta'
    ];
}
