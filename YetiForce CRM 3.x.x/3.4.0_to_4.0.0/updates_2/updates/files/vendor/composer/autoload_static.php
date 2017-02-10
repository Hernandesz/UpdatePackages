<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce7aec416bba2e91816da8458449b895
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'vtlib\\' => 6,
        ),
        'i' => 
        array (
            'includes\\' => 9,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'E' => 
        array (
            'Exception\\' => 10,
        ),
        'D' => 
        array (
            'DebugBar\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
            'Api\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'vtlib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/vtlib/Vtiger',
        ),
        'includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Exception\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include/exceptions',
        ),
        'DebugBar\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-debugbar/src/DebugBar',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/..' . '/yetiforce',
        ),
        'Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api/webservice',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
            'Recurr' => 
            array (
                0 => __DIR__ . '/..' . '/simshaun/recurr/src',
            ),
        ),
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce7aec416bba2e91816da8458449b895::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce7aec416bba2e91816da8458449b895::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitce7aec416bba2e91816da8458449b895::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitce7aec416bba2e91816da8458449b895::$classMap;

        }, null, ClassLoader::class);
    }
}
