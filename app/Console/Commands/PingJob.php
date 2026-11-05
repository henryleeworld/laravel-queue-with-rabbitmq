<?php

namespace App\Console\Commands;

use App\Jobs\PingJob as Ping;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('ping:job')]
#[Description('Command description')]
class PingJob extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        Ping::dispatch();
    }
}
