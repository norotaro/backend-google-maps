<?php

namespace Norotaro\BackendMaps\Components;

use Cms\Classes\ComponentBase;

use Norotaro\BackendMaps\Models\Settings;

class Map extends ComponentBase
{
    public $longitude;
    public $latitude;
    public $apiKey;

    public function componentDetails()
    {
        return [
            'name' => 'norotaro.backendmaps::lang.component.name',
            'description' => 'norotaro.backendmaps::lang.component.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'width' => [
                'title'             => 'norotaro.backendmaps::lang.component.width',
                'default'           => '100%',
                'description'       => 'norotaro.backendmaps::lang.component.width_description',
                'type'              => 'string',
            ],
            'height' => [
                'title'             => 'norotaro.backendmaps::lang.component.height',
                'default'           => '350px',
                'description'       => 'norotaro.backendmaps::lang.component.height_description',
                'type'              => 'string',
            ],
            'mapTypeId' => [
                'title'             => 'norotaro.backendmaps::lang.component.mapType',
                'default'           => 'ROADMAP',
                'type'              => 'dropdown',
                'options'           => ['ROADMAP' => 'Roadmap', 'SATELLITE' => 'Satellite', 'HYBRID' => 'Hybrid', 'TERRAIN' => 'Terrain']
            ],
            'zoom' => [
                'title'             => 'norotaro.backendmaps::lang.component.zoom',
                'default'           => 12,
                'type'              => 'string',
            ],
            'showMarker' => [
                'title'             => 'norotaro.backendmaps::lang.component.showMarker',
                'default'           => 'true',
                'type'              => 'checkbox',
            ],
            'animateMarker' => [
                'title'             => 'norotaro.backendmaps::lang.component.animateMarker',
                'default'           => 'true',
                'type'              => 'checkbox',
            ]
        ];
    }

    public function onRun()
    {
        $settings = Settings::instance();

        // Latitude and longitude
        $address_map = explode(',', $settings->address_map);

        $this->latitude = !empty($address_map[0]) ? $address_map[0] : 0;
        $this->longitude = !empty($address_map[1]) ? $address_map[1] : 0;

        // Google Maps API KEY
        $this->apiKey = $settings->address_map_key;
    }
}
