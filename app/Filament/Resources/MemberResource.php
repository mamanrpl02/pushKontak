<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Member;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MemberResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MemberResource\RelationManagers;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()->label('Nama'),
                TextInput::make('noHp')->label('Nomor WhatsApp')->numeric()->required(),
                TextInput::make('email')->label('Email')->required(),
                TextInput::make('password')->label('Password')
                    ->password()
                    ->revealable()
                    ->dehydrated(fn(?string $state): bool => filled($state))
                    ->label('Password'),
                FileUpload::make('gambar')
                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg'])
                    ->directory('profile')
                    ->image()
                    ->imageEditor(),
                TextInput::make('tokenAkun')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable(),
                Tables\Columns\TextColumn::make('noHp')->sortable(),
                Tables\Columns\TextColumn::make('email')->sortable(),
                ImageColumn::make('gambar')
                    ->label('Profile')
                    ->circular(),
                Tables\Columns\TextColumn::make('tokenAkun')->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
