<?php namespace Anomaly\ExampleModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class ExampleModule extends Module
{

    /**
     * The module navigation group.
     *
     * @var string
     */
    protected $navigation = 'streams::navigation.website';

    /**
     * The module's sections.
     *
     * @var array
     */
    protected $sections = [
        'examples' => [
            'url'     => 'admin/examples',
            'buttons' => [
                'create' => [
                    'url'  => 'admin/examples/create',
                    'type' => 'success',
                ]
            ]
        ],
    ];
}
