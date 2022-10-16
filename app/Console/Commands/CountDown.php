<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CountDown extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'count:down';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command that is counting down';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
 
        $this->withProgressBar(\App\Models\User::all()->sortByDesc('id'), function ($user) {
            sleep(1);
            // $this->info($user->id);
        });
        $this->newLine();
    }
}
