<?php

namespace Fangapp\Hasher;

use Fangapp\Hasher\MD5Hasher;
use Illuminate\Support\ServiceProvider;

class MD5HasherProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5hash', function(){
            return new MD5Hasher();
        });
    }
}
