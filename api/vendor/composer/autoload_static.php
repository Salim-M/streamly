<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e4442f4625cb6723636f800d5ab3d41
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e4442f4625cb6723636f800d5ab3d41::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e4442f4625cb6723636f800d5ab3d41::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}