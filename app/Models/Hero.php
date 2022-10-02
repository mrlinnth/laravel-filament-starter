<?php

namespace App\Models;

use App\Enums\SpeciesEnum;
use App\Enums\TraitsEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Hero extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $casts = [
        'species' => SpeciesEnum::class,
        'traits' => TraitsEnum::class.':collection,nullable',
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
        return $this->hasMany(Team::class, 'leader_id');
    }

    /**
     * Get the photo thumbnail of the hero
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
}
