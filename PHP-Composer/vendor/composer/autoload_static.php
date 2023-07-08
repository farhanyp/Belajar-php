<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit293a3910b9953e4a2831b52b95244cd0
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yp\\BelajarPhpComposer\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yp\\BelajarPhpComposer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit293a3910b9953e4a2831b52b95244cd0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit293a3910b9953e4a2831b52b95244cd0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit293a3910b9953e4a2831b52b95244cd0::$classMap;

        }, null, ClassLoader::class);
    }
}