<?php namespace Barryvdh\VendorCleanup;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;


class VendorCleanupCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'vendor-cleanup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cleanup vendor directory.';


    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $TARGET = realpath($this->argument('dir'));
        $this->info("Cleaning dir: $TARGET");

        // doctrine
        exec("cd $TARGET/doctrine/annotations && rm -rf bin tests ");
        exec("cd $TARGET/doctrine/cache && rm -rf bin tests");
        exec("cd $TARGET/doctrine/collections && rm -rf tests");
        exec("cd $TARGET/doctrine/common && rm -rf README* UPGRADE* phpunit.xml* build* tests bin lib/vendor");
        exec("cd $TARGET/doctrine/dbal && rm -rf bin build* docs docs2 tests lib/vendor");
        exec("cd $TARGET/doctrine/inflector && rm -rf phpunit.xml* README* tests");
        exec("cd $TARGET/doctrine/collections && rm -rf tests");

        // filp
        exec("cd $TARGET/filp/whoops && rm -rf README.md phpunit.xml* tests examples");

        // ircmaxell
        exec("cd $TARGET/ircmaxell/password-compat && rm -rf README.md test");

        // laravel
        exec("cd $TARGET/laravel/framework && rm -rf readme.md phpunit.xml* build tests");

        // monolog
        exec("cd $TARGET/monolog/monolog && rm -rf README.markdown phpunit.xml* tests doc");

        // nikic
        exec("cd $TARGET/nikic/php-parser && rm -rf README.md CHANGELOG* phpunit.xml* doc test test_old");

        // patchwork
        exec("cd $TARGET/patchwork/utf8 && rm -rf README.md tests");

        // predis
        exec("cd $TARGET/predis/predis && rm -rf README.md CHANGELOG* phpunit.xml* examples tests bin FAQ CONTRIBUTING*");

        // swiftmailer
        exec("cd $TARGET/swiftmailer/swiftmailer && rm -rf CHANGES README* build* doc docs notes test-suite tests create_pear_package.php package*" );

        // symfony
        exec("cd $TARGET/symfony/browser-kit/Symfony/Component/BrowserKit && rm -rf CHANGELOG* README* Tests" );
        exec("cd $TARGET/symfony/console/Symfony/Component/Console && rm -rf CHANGELOG* README* Tests" );
        exec("cd $TARGET/symfony/css-selector/Symfony/Component/CssSelector && rm -rf CHANGELOG* README* Tests" );
        exec("cd $TARGET/symfony/debug/Symfony/Component/Debug && rm -rf CHANGELOG* README* Tests" );
        exec("cd $TARGET/symfony/dom-crawler/Symfony/Component/DomCrawler && rm -rf CHANGELOG* README* Tests" );
        exec("cd $TARGET/symfony/event-dispatcher/Symfony/Component/EventDispatcher && rm -rf CHANGELOG* README* Tests" );
        exec("cd $TARGET/symfony/filesystem/Symfony/Component/Filesystem && rm -rf CHANGELOG* README* Tests" );
        exec("cd $TARGET/symfony/finder/Symfony/Component/Finder && rm -rf CHANGELOG* README* Tests" );
        exec("cd $TARGET/symfony/http-foundation/Symfony/Component/HttpFoundation && rm -rf CHANGELOG* README* Tests" );
        exec("cd $TARGET/symfony/http-kernel/Symfony/Component/HttpKernel && rm -rf CHANGELOG* README* Tests" );
        exec("cd $TARGET/symfony/process/Symfony/Component/Process && rm -rf CHANGELOG* README* Tests" );
        exec("cd $TARGET/symfony/routing/Symfony/Component/Routing && rm -rf CHANGELOG* README* Tests" );
        exec("cd $TARGET/symfony/translation/Symfony/Component/Translation && rm -rf CHANGELOG* README* Tests" );

        // anahkiasen
        if(file_exists("$TARGET/anahkiasen/former")){
            exec("cd $TARGET/anahkiasen/former && rm -rf README* CHANGELOG* CONTRIBUTING* phpunit.xml* tests");
        }
        if(file_exists("$TARGET/anahkiasen/html-object")){
            exec("cd $TARGET/anahkiasen/html-object && rm -rf README* CHANGELOG* phpunit.xml* examples tests");
        }
        if(file_exists("$TARGET/anahkiasen/underscore-php")){
            exec("cd $TARGET/anahkiasen/underscore-php && rm -rf README* CHANGELOG* phpunit.xml* tests");
        }

        // intervention
        if(file_exists("$TARGET/intervention/image")){
            exec("cd $TARGET/intervention/image && rm -rf README* phpunit.xml* public tests");
        }

        # jasonlewis
        //if(file_exists("$TARGET/jasonlewis/basset")){
        //    exec("cd $TARGET/jasonlewis/basset && rm -rf README* phpunit.xml* tests");
        //}

        // leafo
        if(file_exists("$TARGET/leafo/lessphp")){
            exec("cd $TARGET/leafo/lessphp && rm -rf README* docs tests Makefile package.sh");
        }

        // kriswallsmith
        if(file_exists("$TARGET/kriswallsmith/assetic")){
            exec("cd $TARGET/kriswallsmith/assetic && rm -rf CHANGELOG* phpunit.xml* tests docs");
        }

        // mrclay
        if(file_exists("$TARGET/mrclay/minify")){
            exec("cd $TARGET/mrclay/minify && rm -rf HISTORY* MIN.txt UPGRADING* README* min_extras min_unit_tests min/builder min/config* min/quick-test* min/utils.php min/groupsConfig.php min/index.php");
        }


        foreach(\Config::get('laravel-vendor-cleanup::commands') as $command){
            $command = str_replace('$TARGET', $TARGET, $command);
            exec($command);
        }
    }


    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            array('dir', InputArgument::OPTIONAL, 'The path to vendor (absolute path)',\Config::get('laravel-vendor-cleanup::dir')),
        );
    }


}
