<?php namespace Anomaly\ExampleModule;

use Anomaly\Streams\Platform\Addon\Module\ModuleInstaller;

class ExampleModuleInstaller extends ModuleInstaller
{

    protected $installers = [
        'Anomaly\ExampleModule\Installer\ExampleFieldInstaller',
        'Anomaly\ExampleModule\Installer\ExampleStreamInstaller'
    ];
}
