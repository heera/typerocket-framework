<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbba67f953cb39d5f2b0ecb93b1b3ae96
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '2bf7fd0087ff13c2aa5e673ea4ea7303' => __DIR__ . '/..' . '/typerocket/core/functions/functions.php',
        '18b840c6eff6cb7ed2b94475f3f1a95a' => __DIR__ . '/..' . '/typerocket/core/functions/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TypeRocket\\' => 11,
            'TypeRocketThemeOptions\\' => 23,
            'TypeRocketSEO\\' => 14,
            'TypeRocketPageBuilder\\' => 22,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TypeRocket\\' => 
        array (
            0 => __DIR__ . '/..' . '/typerocket/core/src',
        ),
        'TypeRocketThemeOptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/typerocket/plugin-theme-options/src',
        ),
        'TypeRocketSEO\\' => 
        array (
            0 => __DIR__ . '/..' . '/typerocket/plugin-seo/src',
        ),
        'TypeRocketPageBuilder\\' => 
        array (
            0 => __DIR__ . '/..' . '/typerocket/plugin-builder/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbba67f953cb39d5f2b0ecb93b1b3ae96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbba67f953cb39d5f2b0ecb93b1b3ae96::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
