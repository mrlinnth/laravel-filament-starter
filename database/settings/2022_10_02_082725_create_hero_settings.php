<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateHeroSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('hero.gender_options', 'male, female, other');
    }
}
