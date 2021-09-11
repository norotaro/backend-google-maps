# Backend Google Maps

### Easily and quickly integrate a Google Maps field into your Backend Forms.

This plugin provides a Form Widget to integrate a Google Maps map to a Backend Form in a simple and fast way. Additionally, there is a component to display the map in the frontend of the website.

- [Requirements](#requirements)
- [Installation](#installation)
- [Features](#features)
- [Usage](#usage)
    - [Backend forms](#backend-forms)
    - [Frontend](#frontend)
- [Support](#support)
- [License](#license)

## Requirements
* Get the Google Maps KEY API. For more information, visit the following link: https://developers.google.com/maps/documentation/javascript/get-api-key?hl=EN

## Installation
First install the plugin with composer:
```sh
composer require norotaro/wn-backendmaps-plugin
```

Then run the migration files with:

```sh
php artisan winter:up
```

## Features
* Integrate a Google Maps map into your Backend Forms.
* Display the map in the frontend of the website.

## Configuration
To configure this Plugin goto Backend *System* then find *MISC* in left side bar, then click on *Backend Google Maps* , you will get Configuration options.

## Usage

### Backend Forms
Create a field type backendmaps in the fields.yaml file of the model where you want to store the latitude and longitude of a Google Maps location.

```yaml
map:
    label: 'Google Maps'
    oc.commentPosition: ''
    span: left
    type: backendmaps
```

### Frontend
```yaml
[gmap]
width = "500%"
height = "500px"
mapTypeId = "TERRAIN"
zoom = 14
showMarker = 1
animateMarker = 1
==
{% component 'gmap' %}
```

## Suport

- [Issue Tracker](https://github.com/norotaro/wn-backendmaps-plugin/issues/)

## License

BackendMaps for WinterCMS is licensed under the [Apache License](LICENSE).