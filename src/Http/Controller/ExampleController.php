<?php namespace Anomaly\ExampleModule\Http\Controller;

use Anomaly\ExampleModule\Ui\Form\ExampleFormBuilder;
use Anomaly\ExampleModule\Ui\Table\ExampleTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ExampleController extends AdminController
{

    public function index(ExampleTableBuilder $table)
    {
        return $table->render();
    }

    public function create(ExampleFormBuilder $form)
    {
        return $form->render();
    }
}
