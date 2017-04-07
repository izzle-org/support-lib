<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit271c2faefdf5493dc8ddfb4c85cc2256
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Izzle\\Support\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Izzle\\Support\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit271c2faefdf5493dc8ddfb4c85cc2256::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit271c2faefdf5493dc8ddfb4c85cc2256::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit271c2faefdf5493dc8ddfb4c85cc2256::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
