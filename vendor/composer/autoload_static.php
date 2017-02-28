<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29b6d748e5bc9e06fafa55489439720d
{
    public static $classMap = array (
        'PaysbuyPayAPI\\ApiResource' => __DIR__ . '/../..' . '/lib/payapi/resource/APIResource.php',
        'PaysbuyPayAPI\\Object' => __DIR__ . '/../..' . '/lib/payapi/resource/object/Object.php',
        'PaysbuyPayAPI\\Payment' => __DIR__ . '/../..' . '/lib/payapi/Payment.php',
        'PaysbuyPayAPI\\Token' => __DIR__ . '/../..' . '/lib/payapi/Token.php',
        'PaysbuyPayAPI\\VaultResource' => __DIR__ . '/../..' . '/lib/payapi/resource/VaultResource.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit29b6d748e5bc9e06fafa55489439720d::$classMap;

        }, null, ClassLoader::class);
    }
}
