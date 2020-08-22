<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit21dadf5bf1e712118295328805110ad6
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasWeb\\Utils\\Test\\' => 23,
            'MatthiasWeb\\Utils\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasWeb\\Utils\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test/phpunit',
        ),
        'MatthiasWeb\\Utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit21dadf5bf1e712118295328805110ad6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit21dadf5bf1e712118295328805110ad6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}