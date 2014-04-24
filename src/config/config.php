<?php

$standard = 'README* CHANGELOG* FAQ* CONTRIBUTING* HISTORY* UPGRADING* phpunit.xml* package* examples doc docs test tests';

return array(

    /*
    |--------------------------------------------------------------------------
    | Vendor dir
    |--------------------------------------------------------------------------
    |
    | Default vendor dir
    |
    */
    'dir'   => base_path() . '/vendor',

    /*
    |--------------------------------------------------------------------------
    | Rules
    |--------------------------------------------------------------------------
    |
    | Additional rules, to do your own cleanups
    |
    */
    'rules' => array(
        // Default Laravel 4 install
        'd11wtq/boris'                                               => "{$standard}",
        'filp/whoops'                                                => "{$standard}",
        'ircmaxell/password-compat'                                  => "{$standard}",
        'laravel/framework'                                          => "{$standard} build",
        'monolog/monolog'                                            => "{$standard}",
        'nesbot/carbon'                                              => "{$standard}",
        'nikic/php-parser'                                           => "{$standard} test_old",
        'patchwork/utf8'                                             => "{$standard}",
        'phpseclib/phpseclib'                                        => "{$standard}",
        'predis/predis'                                              => "{$standard} bin",
        'stack/builder'                                              => "{$standard}",
        'swiftmailer/swiftmailer'                                    => "{$standard} build* notes test-suite create_pear_package.php",
        'symfony/browser-kit/Symfony/Component/BrowserKit'           => "{$standard}",
        'symfony/console/Symfony/Component/Console'                  => "{$standard}",
        'symfony/css-selector/Symfony/Component/CssSelector'         => "{$standard}",
        'symfony/debug/Symfony/Component/Debug'                      => "{$standard}",
        'symfony/dom-crawler/Symfony/Component/DomCrawler'           => "{$standard}",
        'symfony/event-dispatcher/Symfony/Component/EventDispatcher' => "{$standard}",
        'symfony/filesystem/Symfony/Component/Filesystem'            => "{$standard}",
        'symfony/finder/Symfony/Component/Finder'                    => "{$standard}",
        'symfony/http-foundation/Symfony/Component/HttpFoundation'   => "{$standard}",
        'symfony/http-kernel/Symfony/Component/HttpKernel'           => "{$standard}",
        'symfony/process/Symfony/Component/Process'                  => "{$standard}",
        'symfony/routing/Symfony/Component/Routing'                  => "{$standard}",
        'symfony/security/Symfony/Component/Security'                => "{$standard}",
        'symfony/translation/Symfony/Component/Translation'          => "{$standard}",

        // Common packages
        'anahkiasen/former'                     => "{$standard}",
        'anahkiasen/html-object'                => "{$standard}",
        'anahkiasen/underscore-php'             => "{$standard}",
        'barryvdh/laravel-debugbar'             => "{$standard}",
        'bllim/datatables'                      => "{$standard}",
        'cartalyst/sentry'                      => "{$standard} docs",
        'dflydev/markdown'                      => "{$standard}",
        'doctrine/annotations'                  => "{$standard} bin",
        'doctrine/cache'                        => "{$standard} bin",
        'doctrine/collections'                  => "{$standard}",
        'doctrine/common'                       => "{$standard} bin lib/vendor",
        'doctrine/dbal'                         => "{$standard} bin build* docs2 lib/vendor",
        'doctrine/inflector'                    => "{$standard}",
        'dompdf/dompdf'                         => "{$standard} www",
        'guzzle/guzzle'                         => "{$standard}",
        'guzzlehttp/guzzle'                     => "{$standard}",
        'guzzlehttp/oauth-subscriber'           => "{$standard}",
        'guzzlehttp/streams'                    => "{$standard}",
        'intervention/image'                    => "{$standard} public",
        'jasonlewis/basset'                     => "{$standard}",
        'jeremeamia/SuperClosure'               => "{$standard} demo",
        'kriswallsmith/assetic'                 => "{$standard}",
        'leafo/lessphp'                         => "{$standard} Makefile package.sh",
        'maximebf/debugbar'                     => "{$standard} demo",
        'mockery/mockery'                       => "{$standard}",
        'mrclay/minify'                         => "{$standard} MIN.txt min_extras min_unit_tests min/builder min/config* min/quick-test* min/utils.php min/groupsConfig.php min/index.php",
        'mustache/mustache'                     => "{$standard} bin",
        'oyejorge/less.php'                     => "{$standard}",
        'phenx/php-font-lib'                    => "{$standard} www",
        'phpdocumentor/reflection-docblock'     => "{$standard}",
        'phpoffice/phpexcel'                    => "{$standard} Examples unitTests changelog.txt",
        'rcrowe/twigbridge'                     => "{$standard}",
        'twig/twig'                             => "{$standard}",
        'venturecraft/revisionable'             => "{$standard}",
        'willdurand/geocoder'                   => "{$standard}",

        // Project specific packages

    )
);
