<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class backupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'backup:backupdb {user=Milestone}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a backup of your database application';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$this->info("Congratulation, Your database application back successfully has been created and uploaded to your cloud server!");

    //    $username = $this->ask("Enter your username:");
    //    $pass = $this->secret("Enter your password:");

    //    $this->info("Your username: $username, Your password:$pass");

    // if($this->confirm("Would your like to continue ? "))
    // $this->info("Loading...");
    // else
    // $this->error("Disconnected");
//    $env =  config("app.url");

//    $this->info($env);
// $user = $this->argument("user");
// $this->info($user);
// $n = $this->argument('user');
// $i = 0;
// while($i<=$n)
// {
//     if($i%2==0)
//     $this->info($i);

//     $i += 1;
// }
// $this->call('route:list');
// $this->callSilent('route:list');
$user = $this->argument('user');
$this->info($user);
    }
}
