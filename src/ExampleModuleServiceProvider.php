<?php namespace Anomaly\ExampleModule;

use Illuminate\Support\ServiceProvider;

class ExampleModuleServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->make('router')->get(
            'admin/example',
            'Anomaly\ExampleModule\Http\Controller\ExampleController@index'
        );
        $this->app->make('router')->get(
            'admin/example/create',
            'Anomaly\ExampleModule\Http\Controller\ExampleController@create'
        );
    }
}
