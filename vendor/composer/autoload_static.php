<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb09fdf82fee0c21d4ce0b6f3f854f2c8
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb09fdf82fee0c21d4ce0b6f3f854f2c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb09fdf82fee0c21d4ce0b6f3f854f2c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb09fdf82fee0c21d4ce0b6f3f854f2c8::$classMap;

        }, null, ClassLoader::class);
    }
}