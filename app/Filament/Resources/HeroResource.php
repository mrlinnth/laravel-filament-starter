<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Filament\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\Textarea::make('history'),
                Forms\Components\Select::make('species')
                ->options([
                    'human' => 'Human',
                    'alien' => 'Alien',
                    'robot' => 'Robot',
                    'mutant' => 'Mutant',
                    'god' => 'God',
                ]),
                Forms\Components\Radio::make('gender')
                ->options([
                    'male' => 'Male',
                    'female' => 'Female',
                    'other' => 'Other'
                ]),
                Forms\Components\TextInput::make('age')->numeric(),
                Forms\Components\ColorPicker::make('eye_color'),
                Forms\Components\CheckboxList::make('traits')
                ->options([
                    'intelligence' => 'Intelligence',
                    'strength' => 'Strength',
                    'speed' => 'Speed',
                    'durability' => 'Durability',
                    'power' => 'Power',
                    'combat' => 'Combat',
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('species'),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('age'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }
}
