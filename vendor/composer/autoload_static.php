<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5a857c9e4c52bed0abd021c7daaa7b8
{
    public static $files = array (
        'f485627b283286104bbc2461f512799f' => __DIR__ . '/..' . '/getkirby/toolkit/bootstrap.php',
        'fec9f9cdcb32da181d64dfa6a9d8347b' => __DIR__ . '/..' . '/getkirby/smartypants/smartypants.php',
        '4d43cb4a92fc9083dc76dd8887c0a0ef' => __DIR__ . '/../..' . '/composer.php',
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'ParsedownExtra' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown-extra',
            ),
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitf5a857c9e4c52bed0abd021c7daaa7b8::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
