<?php

namespace Norotaro\BackendMaps\Models;

use Model;

class Settings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'norotaro_backendmaps_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
