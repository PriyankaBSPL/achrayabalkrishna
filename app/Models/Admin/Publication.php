<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $table = 'publications';

    protected $fillable =
    [
        'publication_type',
        'tile',
        'image',
        'language',
        'author',
        'category',
        'publisher',
        'isbn',
        'pages',
        'country',
        'buynow_link',
        'description',
        'cover_type',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'publication_type', 'id');
    }
}
