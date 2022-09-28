<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    /**
     * The heroes that belong to the team.
     */
    public function heroes()
    {
        return $this->belongsToMany(Hero::class);
    }

    /**
     * Get the leader that owns the team.
     */
    public function leader()
    {
        return $this->belongsTo(Hero::class, 'leader_id');
    }
}
