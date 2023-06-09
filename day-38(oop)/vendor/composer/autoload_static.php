<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc18819390b3b1444676ba50e7387a9b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc18819390b3b1444676ba50e7387a9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc18819390b3b1444676ba50e7387a9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc18819390b3b1444676ba50e7387a9b::$classMap;

        }, null, ClassLoader::class);
    }
}
