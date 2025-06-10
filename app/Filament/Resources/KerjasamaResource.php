<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KerjasamaResource\Pages;
use App\Filament\Resources\KerjasamaResource\RelationManagers;
use App\Models\Kerjasama;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\Grid;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KerjasamaResource extends Resource
{
    protected static ?string $model = Kerjasama::class;

    protected static ?string $navigationIcon = 'heroicon-o-puzzle';

    protected static ?string $navigationLabel = 'Kerjasama';

    protected static ?string $navigationGroup = 'Tentang Kami';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                ->schema([
                    Forms\Components\TextInput::make('nama_perusahaan')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Toggle::make('is_value_partner')
                        ->label('is Valued Partner')
                        ->required()
                        ->inline(false),
                ]),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required()
                    ->panelAspectRatio('2:1')
                    ->panelLayout('integrated')
                    ->imageResizeMode('cover')
                    ->label('Image Upload'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->width(100)
                    ->height('auto'),
                Tables\Columns\TextColumn::make('nama_perusahaan'),
                Tables\Columns\IconColumn::make('is_value_partner')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //

                Filter::make('is_valued_partner')
                    ->query(fn (Builder $query): Builder => $query->where('is_value_partner', true))
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
            'index' => Pages\ListKerjasamas::route('/'),
            'create' => Pages\CreateKerjasama::route('/create'),
            'edit' => Pages\EditKerjasama::route('/{record}/edit'),
        ];
    }    
}
