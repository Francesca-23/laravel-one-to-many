<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    public static function generateSlug($titolo)
    {
        return Str::slug($titolo, '-');
    }

    protected $fillable = [
        'titolo',
        'immagine',
        'link',
        'descrizione',
        'tecnologie',
        'slug',
    ];
}
