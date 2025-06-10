<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TukResource\Pages;
use App\Filament\Resources\TukResource\RelationManagers;
use App\Models\Tuk;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Section;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TukResource extends Resource
{
    protected static ?string $model = Tuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-office-building';

    protected static ?string $navigationLabel = 'Tempat Uji Kompetensi';

    protected static ?string $navigationGroup = 'Sertifikasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(3)
                ->schema([
                    Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('nama_tempat')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\MarkdownEditor::make('alamat')
                            ->required(),
                    ])
                    ->columnSpan(2),
                    Section::make('Foto Tempat')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->panelAspectRatio('2:1')
                            ->panelLayout('integrated')
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('16:9')
                            ->imageResizeTargetWidth('1920')
                            ->imageResizeTargetHeight('1080')
                            ->label('Image Upload'),
                    ])
                    ->columnSpan(1),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->width(100)
                    ->height('auto'),
                Tables\Columns\TextColumn::make('nama_tempat'),
                Tables\Columns\TextColumn::make('alamat')
                    ->limit(15),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListTuks::route('/'),
            'create' => Pages\CreateTuk::route('/create'),
            'edit' => Pages\EditTuk::route('/{record}/edit'),
        ];
    }    
}
