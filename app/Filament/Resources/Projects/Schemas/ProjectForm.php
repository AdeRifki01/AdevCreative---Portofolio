<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TagsInput::make('tech_stack')
                    ->label('Technologies / Tech Stack')
                    ->placeholder('Type and press enter (e.g. React, Laravel)')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('link_url')
                    ->url()
                    ->nullable(),
            ]);
    }
}
