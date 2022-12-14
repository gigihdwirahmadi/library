<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5603fde9cb1ec6be381d4df5798057a
{
    public static $prefixLengthsPsr4 = array (
        'n' => 
        array (
            'newlibrary\\App\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'newlibrary\\App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5603fde9cb1ec6be381d4df5798057a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5603fde9cb1ec6be381d4df5798057a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5603fde9cb1ec6be381d4df5798057a::$classMap;

        }, null, ClassLoader::class);
    }
}
