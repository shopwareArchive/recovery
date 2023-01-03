<?php declare(strict_types=1);

use Composer\Autoload\ClassLoader;

if (!file_exists(__DIR__ . '/Common/vendor/autoload.php')) {
    $template = '%s: ';
    if (\PHP_SAPI !== 'cli') {
        $template = '<h2>%s</h2>';
        header('Content-type: text/html; charset=utf-8', true, 503);
    }

    echo sprintf($template, 'Error');
    echo "Please execute \"composer install\" from the command line to install the required dependencies for Shopware 6\n";

    echo sprintf($template, 'Fehler');
    echo "Bitte führen Sie zuerst \"composer install\" aus um alle von Shopware 6 benötigten Abhängigkeiten zu installieren.\n";

    exit(1);
}
date_default_timezone_set(@date_default_timezone_get());

$parent = dirname(__DIR__);
// root/platform/src/Recovery and root/vendor/shopware/recovery
$rootDir = dirname($parent, 2);
if (basename(dirname($rootDir)) === 'vendor') {
    // root/vendor/shopware/platform/src/Recovery
    $rootDir = dirname($rootDir, 2);
}
if (!is_dir($rootDir . '/vendor') && is_dir(dirname($parent) . '/vendor')) {
    // platform/src/Recovery -> platform only
    $rootDir = dirname($parent);
}

define('SW_PATH', $rootDir);

/** @var ClassLoader $autoloader */
$autoloader = require_once __DIR__ . '/Common/vendor/autoload.php';

if (file_exists(SW_PATH . '/vendor/shopware/platform/composer.json')) {
    $autoloader->addPsr4(
        'Shopware\\Core\\',
        SW_PATH . '/vendor/shopware/platform/src/Core/'
    );
    $autoloader->addPsr4(
        'Shopware\\Storefront\\',
        SW_PATH . '/vendor/shopware/platform/src/Storefront/'
    );
    $autoloader->addPsr4(
        'Shopware\\Elasticsearch\\',
        SW_PATH . '/vendor/shopware/platform/src/Elasticsearch/'
    );
    $autoloader->addPsr4(
        'Shopware\\Administration\\',
        SW_PATH . '/vendor/shopware/platform/src/Administration/'
    );
} elseif (file_exists(SW_PATH . '/vendor/shopware/core/composer.json')) {
    $autoloader->addPsr4(
        'Shopware\\Core\\',
        SW_PATH . '/vendor/shopware/core/'
    );

    if (file_exists(SW_PATH . '/vendor/shopware/storefront/composer.json')) {
        $autoloader->addPsr4(
            'Shopware\\Storefront\\',
            SW_PATH . '/vendor/shopware/storefront/'
        );
    }

    if (file_exists(SW_PATH . '/vendor/shopware/elasticsearch/composer.json')) {
        $autoloader->addPsr4(
            'Shopware\\Elasticsearch\\',
            SW_PATH . '/vendor/shopware/elasticsearch/'
        );
    }

    if (file_exists(SW_PATH . '/vendor/shopware/administration/composer.json')) {
        $autoloader->addPsr4(
            'Shopware\\Administration\\',
            SW_PATH . '/vendor/shopware/administration/'
        );
    }
} elseif (file_exists(SW_PATH . '/src/Core/composer.json')) {
    $autoloader->addPsr4(
        'Shopware\\Core\\',
        SW_PATH . '/src/Core/'
    );
    $autoloader->addPsr4(
        'Shopware\\Storefront\\',
        SW_PATH . '/src/Storefront/'
    );
    $autoloader->addPsr4(
        'Shopware\\Elasticsearch\\',
        SW_PATH . '/src/Elasticsearch/'
    );
    $autoloader->addPsr4(
        'Shopware\\Administration\\',
        SW_PATH . '/src/Administration/'
    );
}

return $autoloader;
