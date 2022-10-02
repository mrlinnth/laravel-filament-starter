<?php

namespace App\Filament\Pages;

use App\Settings\HeroSettings;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;

class ManageHero extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = HeroSettings::class;

    protected static ?string $navigationGroup = 'Project Settings';

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('gender_options')
            ->helperText('Separate each option with comma (,)')
            ->required(),
        ];
    }
}
