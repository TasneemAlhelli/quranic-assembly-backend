<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompetitionResource\Pages;
use App\Filament\Resources\CompetitionResource\RelationManagers;
use App\Models\Competition;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class CompetitionResource extends Resource
{
    protected static ?string $model = Competition::class;

    protected static ?string $modelLabel = 'مسابقة قرآنية';

    protected static ?string $pluralModelLabel = 'مسابقات قرآنية';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'المسابقات القرآنية';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label('اسم المسابقة')
                ->required()
                ->columnSpan(2),
                TextInput::make('section')
                ->label('فروع المسابقة')
                ->required()
                ->columnSpan(2),
                TextInput::make('founder')
                ->label('الجهة/الشخصية المؤسسة للمسابقة')
                ->required()
                ->columnSpan(1),
                TextInput::make('supervisor')
                ->label('المسؤولة عن المسابقة')
                ->required()
                ->columnSpan(1),
                TextInput::make('phone_number')
                ->label('هاتف التواصل')
                ->required()
                ->columnSpan(1),
                TextInput::make('age')
                ->label('الفئة العمرية')
                ->required()
                ->columnSpan(1),
                Textarea::make('goal')
                ->label("اهداف المسابقة")
                ->required()
                ->columnSpan(2),
                Textarea::make('reason')
                ->label("أسباب نشوء المسابقة")
                ->required()
                ->columnSpan(2),
                TextInput::make('url')
                ->label('وصلة موقع المسابقة الإلكتروني/انستقرام')
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
            'index' => Pages\ListCompetitions::route('/'),
            'create' => Pages\CreateCompetition::route('/create'),
            'edit' => Pages\EditCompetition::route('/{record}/edit'),
        ];
    }
}
