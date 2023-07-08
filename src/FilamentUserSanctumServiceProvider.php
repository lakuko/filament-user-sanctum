<?php

namespace Lakuko\FilamentUserSanctum;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentUserSanctumServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-user-sanctum';

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
        'plugin-filament-user-sanctum' => __DIR__.'/../resources/dist/filament-user-sanctum.css',
    ];

    protected array $scripts = [
        'plugin-filament-user-sanctum' => __DIR__.'/../resources/dist/filament-user-sanctum.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-user-sanctum' => __DIR__ . '/../resources/dist/filament-user-sanctum.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
        ->hasConfigFile()
        ->hasTranslations();
    }
}
