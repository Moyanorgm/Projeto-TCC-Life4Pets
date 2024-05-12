<?php

//Require the autoloader class if you haven't used composer to install the package
require_once __DIR__ . '/../vendor/autoload.php';

//Configuration object (Get your API info from your account -> API keys) :
$config = new \SpotzeeApi\Config([
    'apiUrl'    => 'https://cp.spotzee.marketing/api/',
    'apiKey'    => 'API-KEY',

    // components
    'components' => [
        'cache' => [
            'class'     => \SpotzeeApi\Cache\File::class,
            'filesPath' => __DIR__ . '/data/cache', // make sure it is writable by webserver
        ]
    ],
]);
//Now inject the configuration and we are ready to make api calls
\SpotzeeApi\Base::setConfig($config);

//Start UTC
date_default_timezone_set('UTC');