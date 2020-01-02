<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use App\Services\ProductsService;
use App\Services\ChangelogService;

class ProductsController extends Controller
{
    private $changelogService;
    private $productsService;

    public function __construct(ProductsService $productsService, ChangelogService $changelogService)
    {
        $this->productsService = $productsService;
        $this->changelogService = $changelogService;
        $this->middleware('auth');
    }

    public function index()
    {
        $products = $this->productsService->addVATToProducts(Products::get());
        return view('products', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('create-product');
    }

    public function store(Request $request)
    {
        $product = new Products($this->productsService->validateProduct($request));
        $product->save();
        $this->changelogService->createChangelog($product->title, "created");

        return redirect(route('products'));
    }

    public function edit($id)
    {
        return view('edit-product', ['product' => Products::find($id)]);
    }

    public function update($id, Request $request)
    {
        $product = Products::find($id);
        $product->update($this->productsService->validateProduct($request));
        $this->changelogService->createChangelog($product->title, "edited");

        return redirect(route('products'));
    }
    
    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();
        $this->changelogService->createChangelog($product->title, "deleted");

        return redirect(route('products'));
    }

}
