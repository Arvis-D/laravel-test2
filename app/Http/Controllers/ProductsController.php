<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('products', [
            'products' => Products::latest()->get()
        ]);
    }

    public function create()
    {
        return view('create-product');
    }

    public function store(Request $request)
    {
        $product = new Products(request()->validate([
            "title" => "required",
            "price" => "required|numeric",
            "quantity" => "required|numeric"
        ]));
        $product->save();

        return redirect(route('products'));
    }

    public function edit()
    {
        return view('edit-product');
    }

    public function update()
    {

    }
    
    public function delete()
    {
        
    }
}
