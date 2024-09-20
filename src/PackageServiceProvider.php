<?php

namespace Bodrosh\TestPackage;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Регистрация всех сервисов пакета.
     *
     * @return void
     */
    public function register()
    {
        // Регистрация зависимостей пакета
    }

    /**
     * Загрузка всех ресурсов пакета.
     *
     * @return void
     */
    public function boot()
    {
        dump(11);
        dump(22);
        dump(33);
        dump(44);
        // Загрузка маршрутов, если есть
//        if (file_exists(__DIR__.'/../routes/web.php')) {
//            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
//        }
//
//        // Загрузка конфигураций, если есть
//        if (file_exists(__DIR__.'/../config/package.php')) {
//            $this->mergeConfigFrom(__DIR__.'/../config/package.php', 'package');
//            $this->publishes([
//                __DIR__.'/../config/package.php' => config_path('package.php'),
//            ], 'config');
//        }
//
//        // Загрузка представлений, если есть
//        if (is_dir(__DIR__.'/../resources/views')) {
//            $this->loadViewsFrom(__DIR__.'/../resources/views', 'package');
//            $this->publishes([
//                __DIR__.'/../resources/views' => resource_path('views/vendor/package'),
//            ], 'views');
//        }
//
//        // Загрузка переводов, если есть
//        if (is_dir(__DIR__.'/../resources/lang')) {
//            $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'package');
//        }
    }
}