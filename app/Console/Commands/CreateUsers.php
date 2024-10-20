<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUsers extends Command
{
    /**
     * Create random users. First argument defines the number of users, 20 by default.
     *
     * @var string
     */
    protected $signature = 'app:create-users {count=20}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create db users for testing.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        User::factory()->count($this->argument('count'))->make();
    }
}
