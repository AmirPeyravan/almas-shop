<?php

namespace App\Services;

use Elastic\Elasticsearch\ClientBuilder;
use App\Models\Admin\Product;

class ElasticService
{
    protected $client;

    public function __construct()
    {
        $this->client = ClientBuilder::create()
            ->setHosts(['localhost:9200']) // اگر پورت متفاوت داری، تغییر بده
            ->build();
    }

    public function indexProduct(Product $product)
    {
        $params = [
            'index' => 'products',
            'id'    => $product->id,
            'body'  => [
                'id'          => $product->id,
                'productName'        => $product->productName,
                'description' => $product->description,
                'price'       => $product->price,
                'thumbnail' => $product->thumbnail,
                // ویژگی‌های دیگر رو هم می‌تونی اضافه کنی
            ]
        ];

        return $this->client->index($params);
    }

    public function searchProducts($query)
    {
        if (!$query) {
            return [];
        }

        $params = [
            'index' => 'products',
            'body'  => [
                'query' => [
                    'multi_match' => [
                        'query'  => $query,
                        'fields' => ['productName', 'description']
                    ]
                ]
            ]
        ];

        try {
            $response = $this->client->search($params);
            return $response;
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

}
