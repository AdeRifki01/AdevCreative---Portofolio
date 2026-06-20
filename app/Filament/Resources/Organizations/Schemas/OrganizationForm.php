<?php

namespace App\Filament\Resources\Organizations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrganizationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('role')
                    ->required(),
                TextInput::make('year')
                    ->required(),
                FileUpload::make('image')
                    ->image(),
            ]);
    }
}
