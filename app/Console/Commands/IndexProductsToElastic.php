<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Admin\Product;
use App\Services\ElasticService;

class IndexProductsToElastic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:index-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ایندکس کردن جدول products در Elasticsearch';

    /**
     * Execute the console command.
     */


    public function handle()
    {
        $elastic = new ElasticService();
        $products = Product::all();

        foreach ($products as $product) {
            $elastic->indexProduct($product);
        }

        $this->info('all data indexed | Done!');
    }
}
