<?php

namespace App\Services;

class ProductsService
{
    private $VAT;

    public function __construct()
    {
        $this->VAT = config('products.VAT');
    }

    public function validateProduct($request)
    {
        return $request->validate([
            "title" => "required",
            "price" => "required|numeric",
            "quantity" => "required|numeric"
        ]);
    }

    public function addVATToProducts($products)
    {
        foreach($products as $product){
            $product['priceVAT'] = number_format(
                $this->getPriceWithVAT($product['price']), 2, ',', '');
            $product['totalPriceVAT'] = number_format(
                $this->getTotalPriceWithVAT($product['price'], $product['quantity']), 2, ',', '');
        }

        return $products;
    }

    private function getPriceWithVAT($price)
    {
        return $price - ($price * $this->VAT);
    }

    private function getTotalPriceWithVAT($quantity, $price)
    {
        return $this->getPriceWithVAT($price) * $quantity;
    }
}