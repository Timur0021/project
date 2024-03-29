<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5a90520af889292f80cbec6521480ed
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5a90520af889292f80cbec6521480ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5a90520af889292f80cbec6521480ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5a90520af889292f80cbec6521480ed::$classMap;

        }, null, ClassLoader::class);
    }
}
