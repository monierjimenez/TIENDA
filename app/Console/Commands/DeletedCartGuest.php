<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
//use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DeletedCartGuest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deleted:cartGest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all invited carts, created more than a month ago';

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
        $texto = "[" . date("Y-m-d H:i:s") . "] Hola mundo cruel";
        Storage::append("archivo.txt", $texto);
    }
}
