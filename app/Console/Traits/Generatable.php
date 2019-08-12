<?php

namespace App\Console\Traits;

use Symfony\Component\Finder\Finder;

trait Generatable
{
    protected $stubDirectory = __DIR__ . '/stubs/';

    public function generateStub($stub, $replacements)
    {
        return str_replace(
            array_keys($replacements),
            $replacements,
            file_get_contents($stub)
        );
    }

    public function stubGenerate($stub, $replacements)
    {
    	return str_replace(
            array_keys($replacements),
            $replacements,
            file_get_contents($this->stubDirectory . $stub.'.stub')
        );
    }

    public function getJsMainMenu()
    {
        $arg = $this->argument('menu');

        $explode = explode('\\', $arg);

        $finder = new Finder();

        $resource = resource_path('js/app/'. strtolower($explode[0]).'/components/');

        $finder->directories()->in($resource);

        $dirs = [];
        foreach ($finder as $file) {
            $path = $file->getRelativePathname();

            if(strpos($path, 'layout') === false && strpos($path, '/') === false){
                $dirs[] = [
                    'name' => ucfirst($path),
                    'child' => $this->getPageFile($explode[0], $path)
                ];
            }
            
        }

        return [ucfirst($explode[0]) => $dirs];
    }

    public function getPageFile($dir, $sub)
    {
        $finder = new Finder();

        $resource = resource_path("js/app/{$dir}/components/{$sub}/");

        $finder->files()->in($resource);

        $files = [];
        foreach ($finder as $file) {
            $path = $file->getRelativePathname();
            
            if($path !== null){
                $files[] = [
                    'name' => ucfirst(str_replace('.vue', '', $path)),
                    'route' => strtolower($dir) .'-'. $sub .'-'. strtolower(str_replace('.vue', '', $path))
                ];
            }
            
        }

        return $files;
    }
}
