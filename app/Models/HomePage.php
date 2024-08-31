<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;
     // Specify the fillable properties
    protected $fillable = [
        'rank',
        'subpage_name',
        'content',
        'media',
        'status',
    ];
}
