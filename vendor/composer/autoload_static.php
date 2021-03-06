<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e09d44b55388d8a4d306f9fc0cb41bd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'P' => 
        array (
            'ParseCsv\\extensions\\' => 20,
            'ParseCsv\\' => 9,
        ),
        'B' => 
        array (
            'Bitrix\\Main\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'ParseCsv\\extensions\\' => 
        array (
            0 => __DIR__ . '/..' . '/parsecsv/php-parsecsv/src/extensions',
        ),
        'ParseCsv\\' => 
        array (
            0 => __DIR__ . '/..' . '/parsecsv/php-parsecsv/src',
        ),
        'Bitrix\\Main\\' => 
        array (
            0 => __DIR__ . '/../..' . '/bitrix',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e09d44b55388d8a4d306f9fc0cb41bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e09d44b55388d8a4d306f9fc0cb41bd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
