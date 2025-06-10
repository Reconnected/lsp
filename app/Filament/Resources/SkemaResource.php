<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkemaResource\Pages;
use App\Filament\Resources\SkemaResource\RelationManagers;
use App\Models\Skema;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Section;
use FIlament\Forms\Components\MarkdownEditor;
use FIlament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Closure;

class SkemaResource extends Resource
{
    protected static ?string $model = Skema::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Skema';

    protected static ?string $navigationGroup = 'Sertifikasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(3)
                    ->schema([
                        Card::make()
                            ->schema([
                                Forms\Components\TextInput::make('nama_skema')
                                    ->required()
                                    ->label('Nama Skema')
                                    ->maxLength(255)
                                    ->reactive()
                                    ->afterStateUpdated(function (Closure $set, $state) {
                                        $set('slug', Str::slug($state));
                                    }),
                                Forms\Components\TextInput::make('slug')
                                    ->disabled()
                                    ->required()
                                    ->label('Skema Slug')
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true),
                                Forms\Components\MarkdownEditor::make('deskripsi_singkat')
                                    ->required()
                                    ->label('Deskripsi Singkat Skema')
                                    ->columnSpan('full'),
                                Forms\Components\MarkdownEditor::make('deskripsi_skema')
                                    ->required()
                                    ->label('Deksripsi Skema')
                                    ->columnSpan('full'),
                                Forms\Components\Repeater::make('persyaratan_pemohon')
                                    ->schema([
                                        Forms\Components\TextInput::make('syarat')
                                            ->required()
                                            ->label('Syarat'),
                                    ])
                                    ->createItemButtonLabel('Tambah Syarat')
                                    ->collapsible()
                                    ->defaultItems(2)
                                    ->columnSpan('full'),
                                Forms\Components\Repeater::make('unit_kompetensi')
                                    ->schema([
                                        Forms\Components\TextInput::make('no_unit')
                                            ->required()
                                            ->label('Nomor Unit')
                                            ->columnSpan(1),
                                        Forms\Components\TextInput::make('nama_unit')
                                            ->required()
                                            ->label('Nama Unit')
                                            ->columnSpan(2),
                                    ])
                                    ->createItemButtonLabel('Tambah Unit')
                                    ->collapsible()
                                    ->defaultItems(2)
                                    ->columns(3)
                                    ->columnSpan('full'),
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->panelAspectRatio('4:1')
                                    ->panelLayout('integrated')
                                    ->imageResizeMode('cover')
                                    ->label('Image Header')
                                    ->columnSpan('full'),
                            ])
                            ->columns(2),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->width(100)
                    ->height('auto'),
                Tables\Columns\TextColumn::make('nama_skema'),
                Tables\Columns\TextColumn::make('deskripsi_skema')
                    ->limit(15),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('deleted_at')
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
            'index' => Pages\ListSkemas::route('/'),
            'create' => Pages\CreateSkema::route('/create'),
            'edit' => Pages\EditSkema::route('/{record}/edit'),
        ];
    }    
}
