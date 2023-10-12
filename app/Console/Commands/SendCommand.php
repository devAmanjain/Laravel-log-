<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendCommand extends BaseConsoleCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function executeCommand()
    {
        $this->info('Message Send SuccessFully');
    }
}
