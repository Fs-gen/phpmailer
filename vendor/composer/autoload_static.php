<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteded1efeb05cbfcda0ef33a21c90c5dd
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteded1efeb05cbfcda0ef33a21c90c5dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteded1efeb05cbfcda0ef33a21c90c5dd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}