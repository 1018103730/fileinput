<?php

namespace Luerdog\Fileinput;

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
        //将fileinput资源发布到public中
        //todo

        //调用fileinput资源的模版
        $viewPath = realpath(__DIR__ . '/../resources/views');
        $this->loadViewsFrom($viewPath, 'FileInput');
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
