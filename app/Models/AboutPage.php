<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    use HasFactory;
    protected $table = 'about_pages';

    protected $fillable = [
        'type',
        'content',
        'status',
    ];

    // you can add a scope to easily fetch content by type

    public function scopeOfType($query, $type){
        return $query->where('type', $type);
    }
}
