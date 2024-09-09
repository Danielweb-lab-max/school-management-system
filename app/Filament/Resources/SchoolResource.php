<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SchoolResource\Pages;
use App\Filament\Resources\SchoolResource\RelationManagers;
use App\Models\School;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SchoolResource extends Resource
{
    protected static ?string $model = School::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup='Institutions';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('school_name')
                ->required()
                ->maxLength(255),
            
                Forms\Components\TextInput::make('enrollment_prefix')
                ->required()
                ->maxLength(255),
            
                Forms\Components\TextInput::make('phone')
                ->nullable()
                ->maxLength(20),
            
                Forms\Components\TextInput::make('email')
                ->nullable()
                ->email()
                ->maxLength(255),
            
                Forms\Components\Textarea::make('address')
                ->nullable(),
            
                Forms\Components\TextInput::make('enrollment_base_number')
                ->required()
                ->numeric(),
            
                Forms\Components\TextInput::make('enrollment_base_padding')
                ->required()
                ->numeric(),
            
                Forms\Components\TextInput::make('admission_prefix')
                ->required()
                ->maxLength(255),
            
                Forms\Components\TextInput::make('admission_base_number')
                ->required()
                ->numeric(),
            
                Forms\Components\TextInput::make('admission_base_padding')
                ->required()
                ->numeric(),
            
                Forms\Components\Select::make('status')
                ->options([
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                ])
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('id')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('school_name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('enrollment_prefix')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('phone')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('address')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('enrollment_base_number')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('enrollment_base_padding')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('admission_prefix')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('admission_base_number')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('admission_base_padding')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
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
            'index' => Pages\ListSchools::route('/'),
            'create' => Pages\CreateSchool::route('/create'),
            'edit' => Pages\EditSchool::route('/{record}/edit'),
        ];
    }
}
