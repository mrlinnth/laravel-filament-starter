<?php

namespace App\Filament\Resources;

use App\Enums\SpeciesEnum;
use App\Enums\TraitsEnum;
use App\Filament\Resources\HeroResource\Pages;
use App\Filament\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
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
                Forms\Components\Select::make('species')
                ->options(SpeciesEnum::toArray()),
                Forms\Components\Radio::make('gender')
                ->options([
                    'male' => 'Male',
                    'female' => 'Female',
                    'other' => 'Other'
                ]),
                Forms\Components\CheckboxList::make('traits')
                ->options(TraitsEnum::toArray())
                ->columns(2),
                Forms\Components\TextInput::make('age')->numeric(),
                Forms\Components\ColorPicker::make('eye_color'),
                Forms\Components\SpatieMediaLibraryFileUpload::make('photo')
                ->collection('hero'),
                Forms\Components\Textarea::make('history'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('photo')
                ->collection('hero')
                ->conversion('thumb'),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('species')->searchable(),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('age')->sortable()->toggleable(),
                Tables\Columns\ColorColumn::make('eye_color')->toggleable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('is_male')
                ->label('Males')
                ->query(fn (Builder $query): Builder => $query->where('gender', 'male')),
                Tables\Filters\Filter::make('is_female')
                ->label('Females')
                ->query(fn (Builder $query): Builder => $query->where('gender', 'female')),
                Tables\Filters\Filter::make('is_other')
                ->label('Others')
                ->query(fn (Builder $query): Builder => $query->where('gender', 'other')),
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
            RelationManagers\SkillsRelationManager::class,
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
