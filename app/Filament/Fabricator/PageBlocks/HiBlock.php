<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Models\Hero;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HiBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hi')
            ->schema([
                TextInput::make('name'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
