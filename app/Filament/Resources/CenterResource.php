<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CenterResource\Pages;
use App\Filament\Resources\CenterResource\RelationManagers;
use App\Models\Center;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;

class CenterResource extends Resource
{
    protected static ?string $model = Center::class;

    protected static ?string $modelLabel = 'مركز قرآني';

    protected static ?string $pluralModelLabel = 'مراكز قرآنية';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'المراكز القرآنية';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('الاسم')
                    ->required()
                    ->columnSpan(2),
                Textarea::make('description')
                    ->label("الوصف")
                    ->required()
                    ->columnSpan(2),
                TextInput::make('email')
                    ->label("البريد الالكتروني")
                    ->required()
                    ->columnSpan(1),
                TextInput::make('instagram')
                    ->label('الانستقرام')
                    ->columnSpan(1),
                TextInput::make('founder')
                    ->label('المؤسس')
                    ->required()
                    ->columnSpan(1),
                TextInput::make('supervisor')
                    ->label('المشرف')
                    ->required()
                    ->columnSpan(1),
                DatePicker::make('founded')
                    ->label('تاريخ التأسيس')
                    ->required()
                    ->columnSpan(2),
                TextInput::make('city')
                    ->label('المنطقة')
                    ->required()
                    ->columnSpan(1),
                TextInput::make('address')
                    ->label('العنوان')
                    ->required()
                    ->columnSpan(1),
                Repeater::make('contacts')
                ->relationship('contacts')
                ->label('ارقام التواصل')    
                ->helperText('اضف رقم التواصل')
                ->columnSpan(2)
                ->schema([
                    TextInput::make('phone_number')->label('رقم الهاتف')->required()
                ])      
                ->collapsible()
                ->minItems(1),         
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('name')->label('الاسم'),
                TextColumn::make('founder')->label('المؤسس'),
                TextColumn::make('supervisor')->label('المشرف'),
                TextColumn::make('city')->label('المنطقة'),
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
            'index' => Pages\ListCenters::route('/'),
            'create' => Pages\CreateCenter::route('/create'),
            'edit' => Pages\EditCenter::route('/{record}/edit'),
        ];
    }
}
