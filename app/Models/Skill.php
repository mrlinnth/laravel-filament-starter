<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    /**
     * Get the hero that owns the skill.
     */
    public function hero()
    {
        return $this->belongsTo(Hero::class);
    }
}
