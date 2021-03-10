<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2e4f177c28a15eaf18f4abad7b54d35
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Hanafi\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Hanafi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Modules\\Hanafi\\Database\\Seeders\\HanafiDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/HanafiDatabaseSeeder.php',
        'Modules\\Hanafi\\Http\\Controllers\\HanafiController' => __DIR__ . '/../..' . '/Http/Controllers/HanafiController.php',
        'Modules\\Hanafi\\Providers\\HanafiServiceProvider' => __DIR__ . '/../..' . '/Providers/HanafiServiceProvider.php',
        'Modules\\Hanafi\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/Providers/RouteServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2e4f177c28a15eaf18f4abad7b54d35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2e4f177c28a15eaf18f4abad7b54d35::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf2e4f177c28a15eaf18f4abad7b54d35::$classMap;

        }, null, ClassLoader::class);
    }
}