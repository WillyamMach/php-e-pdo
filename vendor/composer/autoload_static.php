<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02c40d8a7f57805fe61aed1bc9756c62
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit02c40d8a7f57805fe61aed1bc9756c62::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02c40d8a7f57805fe61aed1bc9756c62::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit02c40d8a7f57805fe61aed1bc9756c62::$classMap;

        }, null, ClassLoader::class);
    }
}
