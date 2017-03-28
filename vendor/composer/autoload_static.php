<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd548c2bdf1abd8d51a8e071cbfd53c13
{
    public static $files = array (
        '65262669306b9cfaa9401133253e43a1' => __DIR__ . '/..' . '/torophp/torophp/src/Toro.php',
    );

    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'link\\Models\\' => 12,
            'link\\Controllers\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'link\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'link\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd548c2bdf1abd8d51a8e071cbfd53c13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd548c2bdf1abd8d51a8e071cbfd53c13::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd548c2bdf1abd8d51a8e071cbfd53c13::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
