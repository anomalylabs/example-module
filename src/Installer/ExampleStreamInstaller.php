<?php namespace Anomaly\ExampleModule\Installer;

use Anomaly\Streams\Platform\Stream\StreamInstaller;

class ExampleStreamInstaller extends StreamInstaller
{

    protected $stream = 'examples';

    protected $assignments = [
        'simple_text'    => [
            'required' => true,
            'label'    => 'Simple Text'
        ],
        'example_select' => []
    ];

}
