<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2e33933ddaa46446690946fa96f5f6e
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Electrify\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Electrify\\' => 
        array (
            0 => __DIR__ . '/..' . '/Framework/Mockr',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2e33933ddaa46446690946fa96f5f6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2e33933ddaa46446690946fa96f5f6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2e33933ddaa46446690946fa96f5f6e::$classMap;

        }, null, ClassLoader::class);
    }
}
