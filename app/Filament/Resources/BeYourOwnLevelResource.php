<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeYourOwnLevelResource\Pages;
use App\Filament\Resources\BeYourOwnLevelResource\RelationManagers;
use App\Models\BeYourOwnLevel;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Markdown;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeYourOwnLevelResource extends Resource
{
    protected static ?string $model = BeYourOwnLevel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                MarkdownEditor::make('description')->required(),
                FileUpload::make('img')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('description'),
                ImageColumn::make('img')->disk('public'),
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
            'index' => Pages\ListBeYourOwnLevels::route('/'),
            'create' => Pages\CreateBeYourOwnLevel::route('/create'),
            'edit' => Pages\EditBeYourOwnLevel::route('/{record}/edit'),
        ];
    }
}
