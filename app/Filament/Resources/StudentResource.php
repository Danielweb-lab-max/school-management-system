<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-group';
    protected static ?string $navigationGroup='Students';
    protected static ?string $navigationLabel='Manage Students';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('first_name')->required(),
            Forms\Components\TextInput::make('last_name')->required(),
            Forms\Components\TextInput::make('email')->required()->unique(),
            Forms\Components\DatePicker::make('birthdate')->nullable(),
            Forms\Components\Select::make('gender')->options([
                'male' => 'Male',
                'female' => 'Female',
                'other' => 'Other',
            ])->nullable(),
            Forms\Components\TextInput::make('phone')->nullable(),
            Forms\Components\TextInput::make('address')->nullable(),
            Forms\Components\TextInput::make('image')->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('first_name') ->searchable()->sortable(),
            Tables\Columns\TextColumn::make('last_name') ->searchable(),
            Tables\Columns\TextColumn::make('email') ->searchable(),
            // Tables\Columns\DateColumn::make('birthdate')->sortable(),
            Tables\Columns\TextColumn::make('gender')->sortable(),
            Tables\Columns\TextColumn::make('phone')->sortable(),
            Tables\Columns\TextColumn::make('address')->sortable(),
            // Tables\Columns\ImageColumn::make('image')->disk('public')->directory('students/images'),
            Tables\Columns\TextColumn::make('created_at')->sortable(),
            Tables\Columns\TextColumn::make('updated_at')->sortable(),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
    
}
