<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchievementResource\Pages;
use App\Filament\Resources\AchievementResource\RelationManagers;
use App\Models\Achievement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use App\Enums\Sections;

class AchievementResource extends Resource
{
    protected static ?string $model = Achievement::class;

    protected static ?string $modelLabel = 'إنجاز قرآني';

    protected static ?string $pluralModelLabel = 'انجازات قرآنية';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'الانجازات القرآنية';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('الاسم')
                    ->required()
                    ->columnSpan(2),
                Textarea::make('description')
                    ->label('الوصف')
                    ->columnSpan(2),
                Select::make('link')
                    ->label('ربط بصفحة')
                    ->options(['/centers'  => 'المؤسسات والمراكز القرآنية',
                                '/soiarees' =>'الأمسيات القرآنية' ,
                                '/competitions' =>  'المسابقات القرآنية',
                                '/poetries' =>  'فرق التواشيج النسائية',
                                '/characters' =>  'الشخصيات القرآنية',
                                '/courses'=>   'التدريب والتأهيل'])
                    ->columnSpan(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('name')->label('الاسم'),
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
            'index' => Pages\ListAchievements::route('/'),
            'create' => Pages\CreateAchievement::route('/create'),
            'edit' => Pages\EditAchievement::route('/{record}/edit'),
        ];
    }
}
