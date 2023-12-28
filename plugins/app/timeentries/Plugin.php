<?php namespace App\TimeEntries;

use Backend;
use System\Classes\PluginBase;

/**
 * TimeEntries Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'TimeEntries',
            'description' => 'No description provided yet...',
            'author'      => 'App',
            'icon'        => 'icon-hourglass-half'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'App\TimeEntries\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'app.timeentries.some_permission' => [
                'tab' => 'TimeEntries',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'timeentries' => [
                'label'       => 'TimeEntries',
                'url'         => Backend::url('app/timeentries/TimeEntries'),
                'icon'        => 'icon-hourglass-half',
                'permissions' => ['app.timeentries.*'],
                'order'       => 500,
            ],
        ];
    }
}
