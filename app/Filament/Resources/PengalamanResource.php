<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengalamanResource\Pages;
use App\Filament\Resources\PengalamanResource\RelationManagers;
use App\Models\Pengalaman;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengalamanResource extends Resource
{
    protected static ?string $model = Pengalaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Pengalaman';

    protected static ?string $pluralModelLabel = 'Pengalaman';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('total_sekolah')
                ->label('Jumlah Sekolah')
                ->numeric()
                ->minValue(1)
                ->required(),
                TextInput::make('total_universitas')
                ->label('Jumlah Universitas')
                ->numeric()
                ->minValue(1)
                ->required(),
                TextInput::make('total_asesor')
                ->label('Jumlah Asesor')
                ->numeric()
                ->minValue(1)
                ->required(),
                TextInput::make('total_asesi')
                ->label('Jumlah Asesi')
                ->numeric()
                ->minValue(1)
                ->required(),
                TextInput::make('lembaga_pelatihan')
                ->label('Lembaga Pelatihan')
                ->numeric()
                ->minValue(1)
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('total_sekolah'),
                TextColumn::make('total_universitas'),
                TextColumn::make('total_asesor'),
                TextColumn::make('total_asesi'),
                TextColumn::make('lembaga_pelatihan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePengalamen::route('/'),
        ];
    }    
}
