<?php

use Lib\Test;
use Lib\Config;


Config::set('site_name', 'Your site name');
Config::set('languages', array('en', 'fr'));

//Routes Route name => method prefix
Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_',
));


Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

Test::setData("Hello I am a new class");