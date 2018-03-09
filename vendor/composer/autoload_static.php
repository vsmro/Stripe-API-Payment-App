<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit443de615d0314db6669481d673d13d8b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit443de615d0314db6669481d673d13d8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit443de615d0314db6669481d673d13d8b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}