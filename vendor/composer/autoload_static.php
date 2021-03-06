<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85c22db84275a1dbc48b69dce12f84b8
{
    public static $files = array (
        '2df68f9e79c919e2d88506611769ed2e' => __DIR__ . '/..' . '/respect/stringifier/src/stringify.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'd507e002f7fce7f0c6dbf1f22edcb902' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'R' => 
        array (
            'Respect\\Validation\\' => 19,
            'Respect\\Stringifier\\' => 20,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Respect\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/respect/validation/library',
        ),
        'Respect\\Stringifier\\' => 
        array (
            0 => __DIR__ . '/..' . '/respect/stringifier/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Tracy\\Bar' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Bar/Bar.php',
        'Tracy\\BlueScreen' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/BlueScreen/BlueScreen.php',
        'Tracy\\Bridges\\Nette\\Bridge' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/Bridge.php',
        'Tracy\\Bridges\\Nette\\MailSender' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/MailSender.php',
        'Tracy\\Bridges\\Nette\\TracyExtension' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/TracyExtension.php',
        'Tracy\\Bridges\\Psr\\PsrToTracyLoggerAdapter' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Psr/PsrToTracyLoggerAdapter.php',
        'Tracy\\Bridges\\Psr\\TracyToPsrLoggerAdapter' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Psr/TracyToPsrLoggerAdapter.php',
        'Tracy\\Debugger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Debugger/Debugger.php',
        'Tracy\\DefaultBarPanel' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Bar/DefaultBarPanel.php',
        'Tracy\\DeferredContent' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Debugger/DeferredContent.php',
        'Tracy\\DevelopmentStrategy' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Debugger/DevelopmentStrategy.php',
        'Tracy\\Dumper' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper/Dumper.php',
        'Tracy\\Dumper\\Describer' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper/Describer.php',
        'Tracy\\Dumper\\Exposer' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper/Exposer.php',
        'Tracy\\Dumper\\Renderer' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper/Renderer.php',
        'Tracy\\Dumper\\Value' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper/Value.php',
        'Tracy\\FileSession' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Session/FileSession.php',
        'Tracy\\FireLogger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Logger/FireLogger.php',
        'Tracy\\Helpers' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Helpers.php',
        'Tracy\\IBarPanel' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Bar/IBarPanel.php',
        'Tracy\\ILogger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Logger/ILogger.php',
        'Tracy\\Logger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Logger/Logger.php',
        'Tracy\\NativeSession' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Session/NativeSession.php',
        'Tracy\\OutputDebugger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/OutputDebugger/OutputDebugger.php',
        'Tracy\\ProductionStrategy' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Debugger/ProductionStrategy.php',
        'Tracy\\SessionStorage' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Session/SessionStorage.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85c22db84275a1dbc48b69dce12f84b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85c22db84275a1dbc48b69dce12f84b8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit85c22db84275a1dbc48b69dce12f84b8::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit85c22db84275a1dbc48b69dce12f84b8::$classMap;

        }, null, ClassLoader::class);
    }
}
