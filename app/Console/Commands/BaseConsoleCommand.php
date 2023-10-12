<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\CommandExecutionLogs;

class BaseConsoleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:base-console-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Base Command for logging execution details';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Log the execution start time
        $startTime = now();

        // Call the executeCommand method implemented in the extended command
        $this->executeCommand();

        //Log the execution complete time and duration
        $completeTime = now();

        $executionTime = $completeTime->diffInSeconds($startTime);

        //Log the execution detail in database
        CommandExecutionLogs::create([
            'command_name' => $this->signature,
            'start_time' => $startTime,
            'execution_time' =>  $executionTime
        ]);





    }


}
