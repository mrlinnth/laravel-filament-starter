<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HeroSettings extends Settings
{
    public string $gender_options;

    public static function group(): string
    {
        return 'hero';
    }
}
