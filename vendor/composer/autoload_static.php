<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a091719ff1f387652c8d191ee50ef1e
{
    public static $files = array (
        'ab8f0bbff02e94698ed590a8728c10e1' => __DIR__ . '/..' . '/serpapi/google-search-results-php/restclient.php',
        '610684bbf2d5251724d6cc5e51bfb242' => __DIR__ . '/..' . '/serpapi/google-search-results-php/google-search-results.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2a091719ff1f387652c8d191ee50ef1e::$classMap;

        }, null, ClassLoader::class);
    }
}
