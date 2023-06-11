<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private $products = [];
    public function __construct()
    {
        $this->products = [
            0=>[
                'id'=>1,
                'name'=>'New T Shirt',
                'price'=>2200,
                'image'=>'img/product/1.jpg',
                'description'=>'New T shirt description'
            ],
            1=>[
                'id'=>2,
                'name'=>'New Formal Shirt',
                'price'=>3200,
                'image'=>'img/product/2.jpg',
                'description'=>'New Formal shirt description'
            ],
            2=>[
                'id'=>3,
                'name'=>'New Sony mobile',
                'price'=>52000,
                'image'=>'img/product/3.jpg',
                'description'=>'New Sony Mobile description'
            ],
            3=>[
                'id'=>4,
                'name'=>'New Samsung Mobile',
                'price'=>52000,
                'image'=>'img/product/4.jpg',
                'description'=>'New Samsung Mobile description'
            ],
            4=>[
                'id'=>5,
                'name'=>'New Sharee',
                'price'=>52000,
                'image'=>'img/product/5.jpg',
                'description'=>'New Sharee description'
            ]
        ];
    }
    public function getAllProduct()
    {
        return $this->products;
    }
    public function getProductById($id)
    {
        foreach ($this->products as $product)
        {
            if($product['id']==$id)
            {
                return $product;
            }
        }
    }
}
