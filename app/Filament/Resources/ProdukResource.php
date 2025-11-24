<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukResource\Pages;
use App\Models\Produk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

// Form Components
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

// Column
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Produk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_produk')
                    ->label('Nama Produk')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('path_img')
                    ->label('Gambar Produk')
                    ->disk('public')
                    ->directory('produk')  
                    ->image()
                    ->imageEditor()
                    ->downloadable()
                    ->previewable(),

                TextInput::make('judul')
                    ->required()
                    ->maxLength(255),

                Textarea::make('deskripsi')
                    ->columnSpanFull()
                    ->required(),

                TextInput::make('harga')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('path_img')
                    ->label('Gambar')
                    ->disk('public')
                    ->square(),

                TextColumn::make('nama_produk')
                    ->label('Nama Produk')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('judul')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('harga')
                    ->label('Harga')
                    ->money('IDR')
                    ->sortable(),

                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}
