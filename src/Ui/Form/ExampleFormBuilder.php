<?php namespace Anomaly\ExampleModule\Ui\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class ExampleFormBuilder extends FormBuilder
{

    protected $model = 'Anomaly\ExampleModule\Example\ExampleModel';

    protected $fields = [
        '*',
        'test' => [
            'label'        => 'Test Input',
            'instructions' => 'This is a test input you can mess with a bit.',
            'type'         => 'markdown',
            'config'       => [
                'separator' => '5'
            ]
        ]
    ];

    protected $actions = ['save'];
}
