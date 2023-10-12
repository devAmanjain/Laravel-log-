<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Console\Commands\BaseConsoleCommand;

class EmailCommand extends BaseConsoleCommand
{
    protected $signature = 'app:email-command';
    protected $description = 'Send email command';

    protected function executeCommand()
    {

        $this->info('Sending email...');

        // Implement your email sending logic here

        $this->info('Email sent.');
    }
}
