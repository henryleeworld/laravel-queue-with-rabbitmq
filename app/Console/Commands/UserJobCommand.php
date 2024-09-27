<?php

namespace App\Console\Commands;

use App\Jobs\UserCreated;
use App\Models\User;
use Illuminate\Console\Command;

class UserJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        UserCreated::dispatch(User::inRandomOrder()->first()->toArray());
    }
}
