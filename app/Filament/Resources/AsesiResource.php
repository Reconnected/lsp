<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AsesiResource\Pages;
use App\Filament\Resources\AsesiResource\RelationManagers;
use App\Models\Asesi;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AsesiResource extends Resource
{
    protected static ?string $model = Asesi::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Asesi';

    protected static ?string $navigationGroup = 'Tentang Kami';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(3)
                    ->schema([
                        Card::make()
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('nama')
                                            ->required()
                                            ->label('Nama Lengkap Asesi')
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('no_regis')
                                            ->required()
                                            ->label('No Registrasi')
                                            ->maxLength(30),
                                        Forms\Components\TextInput::make('no_telepon')
                                            ->tel()
                                            ->required()
                                            ->label('Nomor WA Aktif')
                                            ->maxLength(20),
                                        Forms\Components\TextInput::make('email')
                                            ->email()
                                            ->required()
                                            ->label('Email Aktif')
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('asal_instansi')
                                            ->required()
                                            ->label('Asal Instansi')
                                            ->maxLength(255),
                                        Forms\Components\Select::make('skemas_id')
                                            ->relationship('skemas', 'nama_skema')
                                            ->required()
                                            ->label('Skema Sertifikasi'),
                                    ])
                            ])
                            ->columnSpan(2),
                        Grid::make()
                            ->schema([
                                Section::make('Status & Date')
                                    ->schema([
                                        Forms\Components\Toggle::make('status_kerja')
                                            ->required(),
                                        Forms\Components\DatePicker::make('tgl_lahir')
                                            ->required(),
                                    ]),
                                Section::make('Photo Profile')
                                    ->schema([
                                        Forms\Components\FileUpload::make('image')
                                            ->image()
                                            ->panelAspectRatio('2:1')
                                            ->panelLayout('integrated')
                                            ->imageResizeMode('cover')
                                            ->imageCropAspectRatio('4:6')
                                            ->label('Image Upload'),
                                    ])
                                
                            ])
                            ->columnSpan(1),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('skemas.nama_skema')
                ->label('Skema'),
                Tables\Columns\TextColumn::make('no_regis')
                ->label('No Registrasi'),
                Tables\Columns\ImageColumn::make('image')
                ->label('Foto Asesi'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('no_telepon'),
                Tables\Columns\TextColumn::make('tgl_lahir')
                    ->date(),
                Tables\Columns\IconColumn::make('status_kerja')
                    ->boolean(),
                Tables\Columns\TextColumn::make('asal_instansi'),
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
            'index' => Pages\ListAsesis::route('/'),
            'create' => Pages\CreateAsesi::route('/create'),
            'edit' => Pages\EditAsesi::route('/{record}/edit'),
        ];
    }    
}
