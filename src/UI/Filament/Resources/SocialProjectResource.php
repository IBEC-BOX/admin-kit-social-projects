<?php

namespace AdminKit\SocialProjects\UI\Filament\Resources;

use AdminKit\Core\Forms\Components\TranslatableTabs;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use AdminKit\SocialProjects\Models\SocialProject;
use AdminKit\SocialProjects\UI\Filament\Resources\SocialProjectResource\Pages;

class SocialProjectResource extends Resource
{
    protected static ?string $model = SocialProject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TranslatableTabs::make(fn ($locale) => Forms\Components\Tabs\Tab::make($locale)->schema([
                    Forms\Components\TextInput::make('title')
                        ->label(__('admin-kit-social-projects::social-projects.resource.title'))
                        ->required($locale === app()->getLocale()),
                ])),
            ])
            ->columns(1);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin-kit-social-projects::social-projects.resource.id'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('admin-kit-social-projects::social-projects.resource.title')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('admin-kit-social-projects::social-projects.resource.created_at')),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('id', 'desc');
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
            'index' => Pages\ListSocialProject::route('/'),
            'create' => Pages\CreateSocialProject::route('/create'),
            'edit' => Pages\EditSocialProject::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('admin-kit-social-projects::social-projects.resource.label');
    }

    public static function getPluralLabel(): ?string
    {
        return __('admin-kit-social-projects::social-projects.resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('admin-kit-social-projects::social-projects.resource.plural_label');
    }
}
