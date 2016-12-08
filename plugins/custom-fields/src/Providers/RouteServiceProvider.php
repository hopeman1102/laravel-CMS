<?php namespace WebEd\Plugins\CustomFields\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'WebEd\Plugins\CustomFields\Http\Controllers';

    public function map(Router $router)
    {
        $router->group(['middleware' => 'web'], function (Router $router) {
            $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        });

        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
    }
}
