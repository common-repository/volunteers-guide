<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit687c3e29c1af17cadef4edfc464f8012
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hashids\\' => 8,
        ),
        'D' => 
        array (
            'Defuse\\Crypto\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hashids\\' => 
        array (
            0 => __DIR__ . '/..' . '/hashids/hashids/src',
        ),
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit687c3e29c1af17cadef4edfc464f8012::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit687c3e29c1af17cadef4edfc464f8012::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
