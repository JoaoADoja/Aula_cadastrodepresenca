<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59a8af55fd34151586f7fdf6d9cd0195
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59a8af55fd34151586f7fdf6d9cd0195::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59a8af55fd34151586f7fdf6d9cd0195::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit59a8af55fd34151586f7fdf6d9cd0195::$classMap;

        }, null, ClassLoader::class);
    }
}