<?php namespace Anomaly\ExampleModule\Installer;

use Anomaly\Streams\Platform\Field\FieldInstaller;

class ExampleFieldInstaller extends FieldInstaller
{

    protected $fields = [
        'simple_text'    => 'text',
        'example_select' => [
            'type'   => 'select',
            'config' => [
                'options' => [
                    'foo' => 'Foo',
                    'bar' => 'Bar'
                ]
            ]
        ]
    ];
}
