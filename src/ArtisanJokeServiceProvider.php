<?php

namespace Laravelspeak\Commands;

use Illuminate\Support\ServiceProvider;

class ArtisanJokeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.laravelspeak.artisan-joke', function($app){
			return $app['Laravelspeak\Commands\JokeCommand'];
		});
		
		$this->Commands('command.laravelspeak.artisan-joke');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
