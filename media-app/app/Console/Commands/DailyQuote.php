<?php

namespace App\Console\Commands;

use App\Models\media;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DailyQuote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'deleted the old news successfully';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(){
    $users = \App\Models\media::whereDate('created_at', '<=', now() -> subDays(30)) -> delete();
dd($users);
    }
}
