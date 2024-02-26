<?php

namespace VendorName\Skeleton\UI\Filament\Resources;

use AdminKit\Core\Forms\Components\TranslatableTabs;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use VendorName\Skeleton\Models\SingleName;
use VendorName\Skeleton\UI\Filament\Resources\SingleNameResource\Pages;

class SingleNameResource extends Resource
{
    protected static ?string $model = SingleName::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TranslatableTabs::make(fn ($locale) => Forms\Components\Tabs\Tab::make($locale)->schema([
                    Forms\Components\TextInput::make('title')
                        ->label(__('skeleton::skeleton_without_prefix.resource.title'))
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
                    ->label(__('skeleton::skeleton_without_prefix.resource.id'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('skeleton::skeleton_without_prefix.resource.title')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('skeleton::skeleton_without_prefix.resource.created_at')),
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
            'index' => Pages\ListSingleName::route('/'),
            'create' => Pages\CreateSingleName::route('/create'),
            'edit' => Pages\EditSingleName::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('skeleton::skeleton_without_prefix.resource.label');
    }

    public static function getPluralLabel(): ?string
    {
        return __('skeleton::skeleton_without_prefix.resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('skeleton::skeleton_without_prefix.resource.plural_label');
    }
}
