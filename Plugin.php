<?php

namespace MathieuTanguay\Podium;

use System\Classes\PluginBase;

/**
 * Class Plugin
 *
 * @package MathieuTanguay\Podium
 *
 * @author Mathieu Tanguay <mathieu.tanguay871@gmail.com>
 * @copyright Mathieu Tanguay
 */
class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Podium Plugin',
            'description' => 'Provides and easy way to list all achieved place in sports or event gaming competitions, olympics or races',
            'author' => 'Mathieu Tanguay',
            'icon' => 'icon-calendar',
            'homepage' => 'http://lunfel.org'
        ];
    }

    public function registerComponents()
    {
        return [
            'MathieuTanguay\Podium\Components\PodiumList' => 'podiumList'
        ];
    }

    public function registerNavigation()
    {
        return [
            'events' => [
                'label' => 'Podium',
                'url' => \Backend::url('mathieutanguay/podium/results'),
                'icon' => 'icon-trophy',
                'permissions' => ['jorgeandrade.events.*'],
                'order' => 200,

                'sideMenu' => [
                    'events' => [
                        'label' => 'Events',
                        'icon' => 'icon-list',
                        'url' => \Backend::url('jorgeandrade/events/events'),
                        'permissions' => ['jorgeandrade.events.access_events'],
                    ],
                    'calendars' => [
                        'label' => 'Calendars',
                        'icon' => 'icon-calendar',
                        'url' => \Backend::url('jorgeandrade/events/calendars'),
                        'permissions' => ['jorgeandrade.events.access_calendars'],
                    ],
                ],

            ],
        ];
    }
}