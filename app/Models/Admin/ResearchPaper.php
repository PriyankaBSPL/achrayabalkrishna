<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchPaper extends Model
{
    use HasFactory;

    protected $table = 'research_papers';

    protected $fillable =
    [
        'year',
        'description',
        'link'
    ];
}
