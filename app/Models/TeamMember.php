<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = ['name', 'title', 'description', 'image', 'social_links', 'team_type'];

    protected $casts = [
        'social_links' => 'array',
    ];
}
