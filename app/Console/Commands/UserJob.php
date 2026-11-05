<?php

namespace App\Console\Commands;

use App\Jobs\UserCreated;
use App\Models\User;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('user:job')]
#[Description('Command description')]
class UserJob extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        UserCreated::dispatch(User::inRandomOrder()->first()->toArray());
    }
}
