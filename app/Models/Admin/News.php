<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
      '  title',
        'image',
        'description',
        'read_more_link',
        'date',
        'status'
    ];
}
