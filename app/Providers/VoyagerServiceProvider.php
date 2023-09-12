<?php 
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class VoyagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Добавляем свой пункт меню в админ-панель Voyager
        \Event::listen('voyager.menu.admin', function ($menu) {
            $menu[] = [
                'text' => 'Моя страница',
                'url' => '/admin/custom-action', // Путь к вашему действию
                'icon' => 'voyager-settings', // Иконка из иконок Voyager
            ];
            return $menu;
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}