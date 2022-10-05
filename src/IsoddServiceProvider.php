<?php

namespace XuanVinh\Isodd;
use Illuminate\Support\ServiceProvider;

class IsoddServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','isodd');
    }

    public function register(){

    }
}
