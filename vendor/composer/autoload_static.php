<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3c0d91ced1fc1d2b5afde34dadd9b80
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Istiakshams\\Artemis\\' => 20,
        ),
        'D' => 
        array (
            'Database\\Seeders\\' => 17,
            'Database\\Factories\\' => 19,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Istiakshams\\Artemis\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/istiakshams/artemis/src',
        ),
        'Database\\Seeders\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database/seeders',
        ),
        'Database\\Factories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database/factories',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3c0d91ced1fc1d2b5afde34dadd9b80::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3c0d91ced1fc1d2b5afde34dadd9b80::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3c0d91ced1fc1d2b5afde34dadd9b80::$classMap;

        }, null, ClassLoader::class);
    }
}
