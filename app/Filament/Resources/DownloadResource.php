<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DownloadResource\Pages;
use App\Filament\Resources\DownloadResource\RelationManagers;
use App\Models\Download;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DownloadResource extends Resource
{
    protected static ?string $model = Download::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-download';

    protected static ?string $navigationGroup = 'Sertifikasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    Forms\Components\TextInput::make('nama_file')
                        ->label('Nama File')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Select::make('kategori')
                        ->label('Kategori File')
                        ->options([
                            'Leaflet' => 'Leaflet',
                            'Alur Proses Sertifikasi' => 'Alur Proses Sertifikasi',
                            'Panduan Uji Kompetensi' => 'Panduan Uji Kompetensi',
                        ])
                        ->required(),
                    Forms\Components\FileUpload::make('file')
                        ->label('Upload File')
                        ->required()
                        ->panelAspectRatio('4:1')
                        ->panelLayout('integrated')
                        ->acceptedFileTypes(['application/pdf'])
                        ->loadingIndicatorPosition('left')
                        ->enableDownload()
                        ->imagePreviewHeight('250')
                        ->removeUploadedFileButtonPosition('right')
                        ->uploadButtonPosition('left')
                        ->uploadProgressIndicatorPosition('left')
                        ->columnSpan('full'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_file'),
                Tables\Columns\TextColumn::make('kategori'),
                Tables\Columns\TextColumn::make('file'),
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
            'index' => Pages\ListDownloads::route('/'),
            'create' => Pages\CreateDownload::route('/create'),
            'edit' => Pages\EditDownload::route('/{record}/edit'),
        ];
    }    
}
