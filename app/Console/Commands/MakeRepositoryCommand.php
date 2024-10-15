<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeRepositoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new repository class';

    /**
     * The namespace of the contracts.
     *
     * @var string
     */
    protected $namespace = 'App\Repositories';

    /**
     * Create a new file.
     *
     * @param string $namespace
     * @param string $name
     * @param string $stub
     */
    protected function createFile(string $namespace, string $name, string $stub): void
    {
        // Make path to support sub directories
        $dir = str_replace($this->namespace, '', $namespace);
        $dir = app_path('Repositories' . str_replace('/', '\\', $dir));

        // Create the directory if it does not exist
        if (!is_dir($dir)) mkdir($dir, 0755, true);

        $path = $dir . '\\' . $name . 'Repository.php';

        if (file_exists($path)) {
            $this->error('Repository already exists!');

            exit(1);
        }

        $repository = str_replace(['{{ namespace }}', '{{ class }}', '{{ interface }}'], [$namespace, $name.'DataTable', $name.'Interface'], $stub);

        file_put_contents($path, $repository);

        $this->info('Repository created successfully.');
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(): string
    {
        return file_get_contents(base_path() . "/stubs/repository.stub");
    }

    /**
     * Create a new repository class.
     *
     * @param string $name
     */
    protected function createRepository(string $name): void
    {
        // If name already has the word repository, remove it
        if (str_contains($name, 'Repository')) {
            $name = str_replace('Repository', '', $name);
        }

        $namespace = $this->namespace;

        // if name had sub directories, remove them and add them to the namespace
        if (str_contains($name, '/')) {
            $name = str_replace('/', '\\', $name);
            $namespace .= '\\' . str_replace('/', '\\', dirname($name));
            $name = basename($name);
        }

        $stub = $this->getStub();

        $this->createFile($namespace, $name, $stub);
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = $this->argument('name');

        $this->createRepository($name);
    }
}