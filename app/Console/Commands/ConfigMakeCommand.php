<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;

class ConfigMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:config {name : The name of the migration}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new config file';

    /**
     * Config file type.
     */
    protected $type = 'Config';

    protected function getStub()
    {
        $stub = '/stubs/config.stub';
        return $this->resolveStubPath($stub);
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $stub = '/stubs/config.stub';
        return  $this->resolveStubPath($stub);


        //file_get_contents('');
    }

    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__.$stub;
    }
}

//vendor\laravel\framework\src\Illuminate\Database\Migrations\MigrationCreator.php
//vendor\laravel\framework\src\Illuminate\Database\Console\Seeds\SeederMakeCommand.php
