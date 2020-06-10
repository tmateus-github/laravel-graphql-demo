<?php

namespace App\GraphQL\Types;

use App\Models\Product;
Use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProductType extends GraphQLType
{
    protected $attributes = [
        'name'        => 'Product',
        'description' => 'Details about a product',
        'model'       => Product::class
    ];

    public function fields() : array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the Product',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the product',
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The description of the product',
            ],
            'country' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The country of origin of the wine',
            ]
        ];
    }
}
