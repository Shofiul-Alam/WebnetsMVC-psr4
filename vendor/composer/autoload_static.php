<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d281bd38467b3b7795e9ae6adc9361e
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webnets\\' => 8,
        ),
        'L' => 
        array (
            'Lib\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webnets\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Webnets',
        ),
        'Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lib',
        ),
    );

    public static $classMap = array (
        'Lib\\App' => __DIR__ . '/../..' . '/Lib/App.php',
        'Lib\\Config' => __DIR__ . '/../..' . '/Lib/Config.php',
        'Lib\\Controller' => __DIR__ . '/../..' . '/Lib/Controller.php',
        'Lib\\Router' => __DIR__ . '/../..' . '/Lib/Router.php',
        'Lib\\Test' => __DIR__ . '/../..' . '/Lib/Test.php',
        'Lib\\View' => __DIR__ . '/../..' . '/Lib/View.php',
        'Webnets\\controllers\\PagesController' => __DIR__ . '/../..' . '/app/Webnets/controllers/PagesController.php',
        'Webnets\\models\\Employee' => __DIR__ . '/../..' . '/app/Webnets/models/Employee.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d281bd38467b3b7795e9ae6adc9361e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d281bd38467b3b7795e9ae6adc9361e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d281bd38467b3b7795e9ae6adc9361e::$classMap;

        }, null, ClassLoader::class);
    }
}
