<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit116c69026e341693d5a32b4a2a0405bb
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit116c69026e341693d5a32b4a2a0405bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit116c69026e341693d5a32b4a2a0405bb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
