<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $product = $model->findAll();

        return view('product', ['product' => $product]);
    }
}
