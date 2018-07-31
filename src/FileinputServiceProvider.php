<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FileinputServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/fileinput.php';
        $this->publishes([$configPath => $this->getConfigPath()], 'config');
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
