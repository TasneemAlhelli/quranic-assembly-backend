<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SoiareeResource\Pages;
use App\Filament\Resources\SoiareeResource\RelationManagers;
use App\Models\Soiaree;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;

class SoiareeResource extends Resource
{
    protected static ?string $model = Soiaree::class;

    protected static ?string $modelLabel = 'أمسية قرآنية';

    protected static ?string $pluralModelLabel = 'أمسيات قرآنية';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'الأمسيات قرآنية';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('اسم الامسية')
                    ->required()
                    ->columnSpan(2),
                DatePicker::make('date')
                    ->label('تاريخ إقامة الأمسية')
                    ->required()
                    ->columnSpan(2),
                TextInput::make('place')
                    ->label('موقع الأمسية')
                    ->required()
                    ->columnSpan(2),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('soiarees')
                    ->label('اعلان الأمسية')
                    ->required()
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('name')->label('الاسم'),
                TextColumn::make('place')->label('موقع الأمسية'),
                TextColumn::make('date')->label('تاريخ الأمسية'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSoiarees::route('/'),
            'create' => Pages\CreateSoiaree::route('/create'),
            'edit' => Pages\EditSoiaree::route('/{record}/edit'),
        ];
    }
}
