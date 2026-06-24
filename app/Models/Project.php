<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'tech_stack', 'image', 'link_url', 'sort_order'];

    protected $casts = [
        'tech_stack' => 'array',
    ];
}
