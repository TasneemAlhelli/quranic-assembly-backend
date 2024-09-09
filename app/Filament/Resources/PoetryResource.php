<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PoetryResource\Pages;
use App\Filament\Resources\PoetryResource\RelationManagers;
use App\Models\Poetry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;

class PoetryResource extends Resource
{
    protected static ?string $model = Poetry::class;

    protected static ?string $modelLabel = 'فرقة تواشيح';

    protected static ?string $pluralModelLabel = 'فرق تواشيح';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'فرق التواشيح';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('اسم الفرقة')
                    ->required()
                    ->columnSpan(1),
                TextInput::make('founder')
                    ->label('الجهة أو الشخصيات المؤسسة للفرقة')
                    ->required()
                    ->columnSpan(1),
                DatePicker::make('founded')
                    ->label('تاريخ التأسيس')
                    ->required()
                    ->columnSpan(1),
                TextInput::make('background')
                    ->label('خلفية التأسيس')
                    ->required()
                    ->columnSpan(1),
                Textarea::make('goal')
                    ->label("الوصف")
                    ->required()
                    ->columnSpan(2),
                TextInput::make('activity_type')
                    ->label('نوعية النشاط')
                    ->required()
                    ->columnSpan(1),
                TextInput::make('member')
                    ->label('عدد عضوات الفرقة')
                    ->integer()
                    ->required()
                    ->columnSpan(1),
                TextInput::make('phone_number')
                    ->label('هاتف التواصل')
                    ->required()
                    ->columnSpan(1),
                TextInput::make('instagram')
                    ->label('الانستقرام')
                    ->columnSpan(1),
                Repeater::make('attachments')
                    ->relationship('attachments')
                    ->label('المرفقات')    
                    ->helperText('اضف مرفق')
                    ->columnSpan(2)
                    ->schema([
                        FileUpload::make('attachment')
                            ->disk('public')
                            ->directory('poetries/attachments')
                            ->label('مرفق')
                            ->columnSpan(2),
                    ])      
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('name')->label('اسم الفرقة'),
                TextColumn::make('founder')->label('الجهة المؤسسة للفرقة'),
                TextColumn::make('activity_type')->label('نوعية النشاط'),
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
            'index' => Pages\ListPoetries::route('/'),
            'create' => Pages\CreatePoetry::route('/create'),
            'edit' => Pages\EditPoetry::route('/{record}/edit'),
        ];
    }
}
