<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class Helperprovider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadHelpers();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    protected function loadHelpers()
    {
        foreach (glob(app_path() . '/Helpers/*.php') as $file)
        {
            require_once($file);
        }
    }
}
