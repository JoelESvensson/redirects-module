<?php namespace Anomaly\RedirectsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class RedirectsModule
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\RedirectsModule
 */
class RedirectsModule extends Module
{

    /**
     * The module icon.
     *
     * @var string
     */
    protected $icon = 'redo';

    /**
     * The module's sections.
     *
     * @var array
     */
    protected $sections = [
        'redirects' => [
            'buttons' => [
                'new_redirect'
            ]
        ]
    ];

}
