<?php

namespace modules\Rayium\Home\Providers;

use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
{
    public function register()
    {
        dd('register');
    }

    public function boot()
    {
        dd('boot');
    }
}
