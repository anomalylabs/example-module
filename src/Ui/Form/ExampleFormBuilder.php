<?php namespace Anomaly\ExampleModule\Ui\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class ExampleFormBuilder extends FormBuilder
{

    protected $model = 'Anomaly\ExampleModule\Example\ExampleModel';

    protected $actions = ['save'];
}
