<?php

namespace App\Filament\Resources\Libros\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LibroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('titulo')
                    ->required(),
                TextInput::make('autor')
                    ->required(),
                TextInput::make('editorial')
                    ->required(),
                TextInput::make('cliente_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
