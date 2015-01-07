<?php namespace Anomaly\ExampleModule\Ui\Table;

use Anomaly\ExampleModule\Example\ExampleModel;
use Anomaly\Streams\Platform\Ui\Table\Table;
use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class ExampleTableBuilder extends TableBuilder
{

    protected $model = 'Anomaly\ExampleModule\Example\ExampleModel';

    protected $buttons = [
        'edit',
        [
            'type'       => 'danger',
            'text'       => 'Danger Will Robinson!',
            'url'        => 'admin/danger/danger/danger',
            'attributes' => [
                'data-id' => 'entry.id',
            ]
        ]
    ];

    public function __construct(Table $table)
    {
        $this->setColumns(
            [
                'simple_text',
                [
                    'heading' => 'Is this awesome?',
                    'value'   => function (ExampleModel $entry) {
                            if ($entry->isAwesome()) {
                                return 'Sure is.';
                            }

                            return 'Nope.';
                        }
                ]
            ]
        );

        parent::__construct($table);
    }
}
 