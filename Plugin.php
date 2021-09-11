<?php

namespace Norotaro\BackendMaps;

use System\Classes\PluginBase;
use System\Classes\PluginManager;
use System\Classes\SettingsManager;

/**
 * Backend Google Maps Plugin Information File
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
            'name'        => 'norotaro.backendmaps::lang.plugin.name',
            'description' => 'norotaro.backendmaps::lang.plugin.description',
            'author'      => 'Norotaro',
            'icon'        => 'icon-search'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'norotaro.backendmaps::lang.settings.label',
                'description' => 'norotaro.backendmaps::lang.settings.description',
                'permissions' => ['norotaro.backendmaps.manage'],
                'icon'        => 'icon-map-marker',
                'class'       => 'Norotaro\backendmaps\Models\Settings',
                'order'       => 602
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'norotaro.backendmaps.manage' => [
                'label' => 'norotaro.backendmaps::lang.permissions.label',
                'tab' => 'norotaro.backendmaps::lang.permissions.tab'
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'Norotaro\BackendMaps\Components\gMap' => 'gmap'
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Norotaro\BackendMaps\FormWidgets\BackendMaps' => [
                'label' => 'norotaro.backendmaps::lang.widget.name',
                'code'  => 'backendmaps'
            ]
        ];
    }
}
