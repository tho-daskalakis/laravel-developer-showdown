<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;

class UpdateUserData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-user-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Retrieve all users
        $users = User::all();

        // Check if there are users in the database
        if ($users->isEmpty()) {
            $this->info('No users found.');
            return;
        }

        // Loop through each user and update the desired data
        foreach ($users as $user) {
            $newName = fake()->name();
            $newTimezone = Arr::random(['CET', 'CST', 'GMT+1']);

            // Update user data
            $user->update([
                'name' => $newName,
                'timezone' => $newTimezone,
            ]);
        }

        $this->info('All users have been updated successfully.');
    }
}
