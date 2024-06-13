<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;
     protected $fillable=[
        'id',
        'title',
        'description',
        'image',
        'date',
        'status'
     ];
}
