<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoCategory extends Model
{
    protected $fillable =['title','parent_id','cat_descriptions','thumbnail','status','gallery_type'];
}
