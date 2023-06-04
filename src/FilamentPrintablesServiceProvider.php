<?php

namespace FastofiCorp\FilamentPrintables;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use FastofiCorp\FilamentPrintables\Resources\FilamentPrintableResource;

class FilamentPrintablesServiceProvider extends PluginServiceProvider
{

    protected array $resources = [
        FilamentPrintableResource::class,
    ];


    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-printables')
            ->hasConfigFile()
            ->hasTranslations()
            ->hasViews()
            ->publishesServiceProvider('FilamentPrintablesServiceProvider')
            ->hasMigration('create_printables_table');
    }
}
