<?php

namespace Lakuko\FilamentSanctum;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentSanctumServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-sanctum';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-sanctum' => __DIR__.'/../resources/dist/filament-sanctum.css',
    ];

    protected array $scripts = [
        'plugin-filament-sanctum' => __DIR__.'/../resources/dist/filament-sanctum.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-sanctum' => __DIR__ . '/../resources/dist/filament-sanctum.js',
    // ];

    protected function getResources(): array
    {
        return config('filament-sanctum.resources');
    }

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
        ->hasConfigFile()
        ->hasTranslations();
    }
}
