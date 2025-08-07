<?php
namespace App\Providers;

use App\Models\Menu;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrap();

        view()->composer('*', function ($view) {
            $menus = Menu::where('show_in_header', true)
            ->whereNull('parent_id')
                ->orderBy('order')
                ->with('children')
                ->get();

            $view->with('menus', $menus);
        });

    }
}
