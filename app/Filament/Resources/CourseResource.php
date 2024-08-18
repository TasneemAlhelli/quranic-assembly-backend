<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Radio;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $modelLabel = 'دورة تخصصية';

    protected static ?string $pluralModelLabel = 'دورات تخصصية';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'الدورات والتأهيل';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Radio::make('type')
                    ->label('نوع الدورة')
                    ->options([
                        'inside' => 'في الداخل',
                        'outside' => 'في الخارج',
                    ]),
                TextInput::make('name')
                    ->label('الاسم')
                    ->required()
                    ->columnSpan(2),
                Textarea::make('description')
                    ->label("معلومات و بيانات الدورة")
                    ->required()
                    ->columnSpan(2),
                TextInput::make('place')
                    ->label("مكان انعقاد الدورة")
                    ->required()
                    ->columnSpan(1),
                DatePicker::make('date')
                    ->label('تاريخ  الدورة')
                    ->required()
                    ->columnSpan(1),
                TextInput::make('content_heading')
                    ->label("عنوان محتوى الدورة والمواد التعليمية")
                    ->columnSpan(2),
                Textarea::make('content')
                    ->label("وصف للمحتوى و المواد")
                    ->required()
                    ->columnSpan(2),
                Repeater::make('subjects')
                    ->relationship('subjects')
                    ->label('المواد')    
                    ->helperText('اضف مادة')
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('subject')->label('اسم المادة')
                    ])      
                    ->collapsible(),
                Repeater::make('attendees')
                    ->relationship('attendees')
                    ->label('الملتحقات')    
                    ->helperText('اضف ملتحقة')
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('name')->label('الاسم')
                    ])      
                    ->collapsible()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('name')->label('الاسم'),
                TextColumn::make('place')->label('مكان انعقاد الدورة'),
                TextColumn::make('date')->label('تاريخ انعقاد الدورة'),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
