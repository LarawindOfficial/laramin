<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use function Laravel\Prompts\text;

class CreateResourceViews extends Command
{
    protected $signature = 'create:resource-views';

    protected $description = 'Create resource views with specified directory and files';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $name = $this->text('What is your name?');
        $directory = $this->argument('directory');

        // Create the directory if it doesn't exist
        if (!File::exists(resource_path("views/{$directory}"))) {
            File::makeDirectory(resource_path("views/{$directory}"), 0755, true);
        }

        // Create the files and insert the provided code snippet
        $views = ['index', 'create', 'edit', 'show'];

        foreach ($views as $view) {
            $filePath = resource_path("views/{$directory}/{$view}.blade.php");

            if (!File::exists($filePath)) {
                File::put($filePath, $this->generateViewContent());
                $this->info("Created {$view}.blade.php in resources/views/{$directory}");
            } else {
                $this->warn("{$view}.blade.php already exists in resources/views/{$directory}");
            }
        }
    }

    protected function generateViewContent()
    {
        return <<<BLADE
<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Resource') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        @role('superadministrator')
            <x-page.actions.create :route="route('resource.create')" />
        @endrole
    </x-slot>

    <x-page.content.container>
        @if (\$resource->count() < 0)
            <x-card>
                <span class="text-white">Looks like there are no users to show at the moment.</span>
            </x-card>
        @else
            @include('admin.resource.partials.resource-table')
        @endif
    </x-page.content.container>
</x-app-layout>
BLADE;
    }
}
