<?php

namespace App\Services;

use App\Products;

trait ProductsService
{
    protected function validateProduct($request)
    {
        return $request->validate([
            "title" => "required",
            "price" => "required|numeric",
            "quantity" => "required|numeric"
        ]);
    }

    protected function addVATToProducts($products)
    {
        foreach($products as $product){
            $product['priceVAT'] = number_format(
                $this->getPriceWithVAT($product['price']), 2, ',', '');
            $product['totalPriceVAT'] = number_format(
                $this->getTotalPriceWithVAT($product['price'], $product['quantity']), 2, ',', '');
        }

        return $products;
    }

    protected function getPriceWithVAT($price)
    {
        return $price - ($price * config('products.VAT'));
    }

    protected function getTotalPriceWithVAT($quantity, $price)
    {
        return $this->getPriceWithVAT($price) * $quantity;
    }
}