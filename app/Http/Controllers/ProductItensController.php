<?php

namespace App\Http\Controllers;

use App\Models\ProductItens;

class ProductItensController extends Controller
{
    public function index()
    {
        $productItens = ProductItens::with('product')->get();

        return view('product-itens.index', compact('productItens'));
    }
}
