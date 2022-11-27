<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83e0976b3ae9ab4ef10b5db081feb341
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit83e0976b3ae9ab4ef10b5db081feb341::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit83e0976b3ae9ab4ef10b5db081feb341::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit83e0976b3ae9ab4ef10b5db081feb341::$classMap;

        }, null, ClassLoader::class);
    }
}