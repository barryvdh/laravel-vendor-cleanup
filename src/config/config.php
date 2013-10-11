<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Vendor dir
    |--------------------------------------------------------------------------
    |
    | Default vendor dir
    |
    */

    'dir' => base_path() . '/vendor',

    /*
    |--------------------------------------------------------------------------
    | Rules
    |--------------------------------------------------------------------------
    |
    | Additional rules, to do your own cleanups
    |
    */

    'rules' => array(
        //Default Laravel 4 install
        'doctrine/annotations' => 'bin tests ',
        'doctrine/cache' => 'bin tests',
        'doctrine/collections' => 'tests',
        'doctrine/common' => 'README* UPGRADE* phpunit.xml* build* tests bin lib/vendor',
        'doctrine/dbal' => 'bin build* docs docs2 tests lib/vendor',
        'doctrine/inflector' => 'phpunit.xml* README* tests',
        'filp/whoops' => 'README.md phpunit.xml* tests examples',
        'ircmaxell/password-compat' => 'README.md test',
        'laravel/framework' => 'build tests',
        'monolog/monolog' => 'README.markdown phpunit.xml* tests doc',
        'nikic/php-parser' => 'README.md CHANGELOG* phpunit.xml* doc test test_old',
        'patchwork/utf8' => 'README.md tests',
        'predis/predis' => 'README.md CHANGELOG* phpunit.xml* examples tests bin FAQ CONTRIBUTING*',
        'swiftmailer/swiftmailer' => 'CHANGES README* build* doc docs notes test-suite tests create_pear_package.php package*',
        'symfony/browser-kit/Symfony/Component/BrowserKit' => 'CHANGELOG* README* Tests',
        'symfony/console/Symfony/Component/Console' => 'CHANGELOG* README* Tests',
        'symfony/css-selector/Symfony/Component/CssSelector' => 'CHANGELOG* README* Tests',
        'symfony/debug/Symfony/Component/Debug' => 'CHANGELOG* README* Tests',
        'symfony/dom-crawler/Symfony/Component/DomCrawler' => 'CHANGELOG* README* Tests',
        'symfony/event-dispatcher/Symfony/Component/EventDispatcher' => 'CHANGELOG* README* Tests',
        'symfony/filesystem/Symfony/Component/Filesystem' => 'CHANGELOG* README* Tests',
        'symfony/finder/Symfony/Component/Finder' => 'CHANGELOG* README* Tests',
        'symfony/http-foundation/Symfony/Component/HttpFoundation' => 'CHANGELOG* README* Tests',
        'symfony/http-kernel/Symfony/Component/HttpKernel' => 'CHANGELOG* README* Tests',
        'symfony/process/Symfony/Component/Process' => 'CHANGELOG* README* Tests',
        'symfony/routing/Symfony/Component/Routing' => 'CHANGELOG* README* Tests',
        'symfony/translation/Symfony/Component/Translation' => 'CHANGELOG* README* Tests',

        //Packages:
        'anahkiasen/former' => 'README* CHANGELOG* CONTRIBUTING* phpunit.xml* tests',
        'anahkiasen/html-object' => 'README* CHANGELOG* phpunit.xml* examples tests',
        'anahkiasen/underscore-php' => 'README* CHANGELOG* phpunit.xml* tests',
        'intervention/image' => 'README* phpunit.xml* public tests',
        'jasonlewis/basset' => 'README* phpunit.xml* tests/Basset',
        'leafo/lessphp' => 'README* docs tests Makefile package.sh',
        'kriswallsmith/assetic' => 'CHANGELOG* phpunit.xml* tests docs',
        'mrclay/minify' => 'HISTORY* MIN.txt UPGRADING* README* min_extras min_unit_tests min/builder min/config* min/quick-test* min/utils.php min/groupsConfig.php min/index.php',
        'phpoffice/phpexcel' => 'Examples unitTests changelog.txt',
        'phenx/php-font-lib' => 'www',
        'mustache/mustache' => 'bin test',
        'mockery/mockery' => 'examples tests',
        'dompdf/dompdf' => 'www',
        
        //Additional packages
        'phpdocumentor/reflection-docblock' => 'README* CHANGELOG* phpunit.xml* tests',
        'rcrowe/twigbridge' => 'README* CHANGELOG* phpunit.xml* tests',
        'twig/twig' => 'README* CHANGELOG* phpunit.xml* test doc',
        

    ),


);
