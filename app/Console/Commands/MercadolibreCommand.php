<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MercadolibreCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mercadolibre:item';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieves a Item';

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
     * @return mixed
     */
    public function handle()
    {
        //
        $name = $this->ask('Product SKU?');
        $product = app('meli_api')->itemShow($name);
        var_dump($product);
    }
}
