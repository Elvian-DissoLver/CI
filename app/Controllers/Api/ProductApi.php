<?php namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProductModel;

class ProductApi extends ResourceController
{
    protected $modelName = 'App\Models\ProductModel';

    public function index()
    {
        $model = new ProductModel();
        $data = $model->findAll();

        return $this->respond($data);
    }

    public function show($id = null)
    {
        $model = new ProductModel();
        $data = $model->find($id);

        if (!$data) {
            return $this->failNotFound('Product not found');
        }

        return $this->respond($data);
    }

    // Add more methods for CRUD operations as needed
}
