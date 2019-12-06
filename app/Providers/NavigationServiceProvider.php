<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Page;

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer( '*', function( $view ) {

            $pages = Page::all();

            return $view->with( 'pages', $pages );
        } );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
