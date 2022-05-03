<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Theme;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'pages',
        'author',
        'available',
    ];

    public function themes()
    {
        return $this->belongsToMany(Theme::class)->withTimestamps();
    }
}
