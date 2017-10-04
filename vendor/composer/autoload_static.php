<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96a04c604e83bea6177428be73ea769e
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Route' => __DIR__ . '/../..' . '/core/Route.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
        'ComposerAutoloaderInit96a04c604e83bea6177428be73ea769e' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit96a04c604e83bea6177428be73ea769e' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit96a04c604e83bea6177428be73ea769e::$classMap;

        }, null, ClassLoader::class);
    }
}
