<?php
/**
 * Laravel Vendor Cleanup
 *
 * @author    Barry vd. Heuvel <barryvdh@gmail.com>
 * @copyright 2013 Barry vd. Heuvel / Fruitcake Studio (http://www.fruitcakestudio.nl)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://github.com/barryvdh/laravel-vendor-cleanup
 */

namespace Barryvdh\VendorCleanup;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Finder\Finder;
use Illuminate\Filesystem\Filesystem;

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
        $vendorDir = realpath($this->argument('dir'));
        $this->info("Cleaning dir: $vendorDir");

        $rules = \Config::get('laravel-vendor-cleanup::rules');

        $filesystem = new Filesystem();

        foreach($rules as $packageDir => $rule){
            if(!file_exists($vendorDir . '/' . $packageDir)){
                continue;
            }
            $patterns = explode(' ', $rule);
            foreach($patterns as $pattern){
                try{
                    $finder = new Finder();

                    /** @var \SplFileInfo $file */
                    foreach($finder->name($pattern)->in( $vendorDir . '/' . $packageDir) as $file){
                        if($file->isDir()){
                            $filesystem->deleteDirectory($file);
                        }elseif($file->isFile()){
                            $filesystem->delete($file);
                        }
                    }
                }catch(\Exception $e){
                    //TODO; check why error are thrown on deleting directories
                    //$this->error("Could not parse $packageDir ($pattern): ".$e->getMessage());
                }
            }
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
            array('dir', InputArgument::OPTIONAL, 'The path to vendor (absolute path)', \Config::get('laravel-vendor-cleanup::dir', base_path() . '/vendor')),
        );
    }


}
