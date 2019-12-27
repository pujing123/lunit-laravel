<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/10 0010
 * Time: 8:08
 */
namespace Pengwang\LunitLaravel\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LunitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views','lunit'
        );
    }

    private function routeConfiguration()
    {
        return [
            'namespace'=>'Pengwang\LunitLaravel\Http\Controllers',
            'prefix'=>'lunit',
            'middleware' => 'web',
        ];
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(),function (){
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }
}
