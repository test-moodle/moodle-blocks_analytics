<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50e90989bcd2bfb4e6c074bd0d22cf3d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50e90989bcd2bfb4e6c074bd0d22cf3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50e90989bcd2bfb4e6c074bd0d22cf3d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
