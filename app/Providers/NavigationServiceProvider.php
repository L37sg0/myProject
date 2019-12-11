<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Page;
use App\Message;

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
            $messages = Message::all();

            return $view->with( 'pages', $pages )
                        ->with( 'messages', $messages );
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
