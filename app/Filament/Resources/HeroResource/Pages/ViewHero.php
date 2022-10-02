<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\Resources\HeroResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewHero extends ViewRecord
{
    protected static string $resource = HeroResource::class;

    protected static string $view = 'filament.resources.heroes.pages.view';
}
