<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06d9fb87d4eaf384ebe83a7d0abf70b8
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'andframe\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'andframe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06d9fb87d4eaf384ebe83a7d0abf70b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06d9fb87d4eaf384ebe83a7d0abf70b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
