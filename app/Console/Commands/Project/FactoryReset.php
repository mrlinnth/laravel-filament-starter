<?php

namespace App\Console\Commands\Project;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class FactoryReset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:factory-reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop tables, migrate, seed, delete uploaded files, clear cache and log';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('migrate:fresh', ['--seed'=>true]);
        Storage::deleteDirectory('public');
        Storage::disk('public')->put('.gitignore', "*\n!.gitignore\n");
        $this->info('Uploaded files deleted');
        $this->call('optimize:clear');
        $logFilePath = storage_path('logs/laravel.log');
        system('truncate -s 0 ' . $logFilePath);
        $this->info('Log file truncated');
        $this->call('shield:install', ['--fresh'=>true]);
        return Command::SUCCESS;
    }
}
