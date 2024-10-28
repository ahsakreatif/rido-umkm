<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('user_id')
                ->default(Auth::id()),
            TextInput::make('title')
                ->required()
                   ->label('Title')
                   ->reactive()
                   ->afterStateUpdated(function ($state, callable $set) {
                    // Mengatur slug berdasarkan title
                    $set('slug', Str::slug($state));
                }),
            TextInput::make('slug')
                   ->required()
                   ->label('Slug')
                   ->disabled()
                   ->hint('Otomatis dari title'),
            RichEditor::make('about')
                ->required()
                ->label('About'),
            TextInput::make('price')
                ->required()
                ->label('Price')
                ->numeric(),
            FileUpload::make('image')
                ->label('Product Image')
                ->image()
                ->directory('products')
                ->disk('public')
                ->required(),
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('title')
                ->label('Title')
                ->sortable()
                ->searchable(),
            TextColumn::make('price')
                ->label('Price (IDR)')
                ->formatStateUsing(fn (string $state): string => 'Rp' . number_format($state, 0, ',', '.')),
            ImageColumn::make('image')
                ->label('Product Image'),
            TextColumn::make(name: 'user_id')
            ->label(label: 'Publisher')
            ->sortable()
            ->searchable(),
            ])
            
            ->filters([
                //
            ])
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
