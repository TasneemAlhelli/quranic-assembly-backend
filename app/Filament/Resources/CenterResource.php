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
use App\Enums\CenterGender;
use Filament\Forms\Components\DatePicker;

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
                    ->required()
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
                    ->columnSpan(2),
                TextInput::make('city')
                    ->label('المنطقة')
                    ->required()
                    ->columnSpan(1),
                TextInput::make('address')
                    ->label('العنوان')
                    ->required()
                    ->columnSpan(1),
                Select::make('الفئة المستهدفة')
                    ->options(CenterGender::class)
                    ->required()
                    ->columnSpan(2),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
