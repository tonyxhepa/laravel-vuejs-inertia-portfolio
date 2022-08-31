<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['skill_id', 'name', 'image', 'project_url'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
