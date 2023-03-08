<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0f459a6d0620898aac8e4536589c72b
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Leguan\\Text\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Leguan\\Text\\' => 
        array (
            0 => __DIR__ . '/../..' . '/xinxi',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0f459a6d0620898aac8e4536589c72b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0f459a6d0620898aac8e4536589c72b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb0f459a6d0620898aac8e4536589c72b::$classMap;

        }, null, ClassLoader::class);
    }
}
