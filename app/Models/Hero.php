<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $casts = [
        'traits' => 'array'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the skills of the hero.
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    /**
     * The teams that belong to the hero.
     */
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    /**
     * Get the teams the hero is leader of.
     */
    public function leaderTeams()
    {
        return $this->hasMany(Team::class, 'leader');
    }
}
