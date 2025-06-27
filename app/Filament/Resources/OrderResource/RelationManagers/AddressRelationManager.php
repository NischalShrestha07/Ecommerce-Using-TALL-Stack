<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddressRelationManager extends RelationManager
{
    protected static string $relationship = 'address';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('first_name')
                    ->required()
                    ->placeholder('First Name')
                    ->maxLength(255),

                TextInput::make('last_name')
                    ->required()
                    ->placeholder('Last Name')
                    ->maxLength(255),

                TextInput::make('phone')
                    ->required()
                    ->tel()
                    ->placeholder('Phone')
                    ->maxLength(255),


                TextInput::make('city')
                    ->required()
                    ->placeholder('City')
                    ->maxLength(255),

                TextInput::make('state')
                    ->required()
                    ->placeholder('State')
                    ->maxLength(255),

                TextInput::make('zip_code')
                    ->required()
                    ->placeholder('Zip Code')
                    ->numeric()
                    ->maxLength(10),


                Forms\Components\Textarea::make('street_address')
                    ->required()
                    ->placeholder('Street Address')
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('street_address')
            ->columns([
                Tables\Columns\TextColumn::make('fullname'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('city'),
                Tables\Columns\TextColumn::make('state'),
                Tables\Columns\TextColumn::make('zip_code'),
                Tables\Columns\TextColumn::make('street_address'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
