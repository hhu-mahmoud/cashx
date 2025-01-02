<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Controllers\BaseController;

class CategoryController extends BaseController
{
    protected $categoryModel;

    public function __construct()
    {
        parent::__construct();
        $this->categoryModel = new CategoryModel();
    }

    // Display all categories
    public function index()
    {
        $data['categories'] = $this->categoryModel->findAll();
        return view('categories/index', $data);
    }

    // Add a new category (Admin only)
    public function create()
    {
        parent::checkRole();

        if ($this->request->getMethod() === 'POST') {
            $this->categoryModel->save([
                'CategoryName' => $this->request->getPost('CategoryName'),
                'Description' => $this->request->getPost('Description'),
            ]);
            return redirect()->to('categories');
        }

        return view('categories/create');
    }

    // Edit a category (Admin only)
    public function edit($id)
    {
        parent::checkRole();
        $data['category'] = $this->categoryModel->find($id);

        if ($this->request->getMethod() === 'POST') {
            $this->categoryModel->update($id, [
                'CategoryName' => $this->request->getPost('CategoryName'),
                'Description' => $this->request->getPost('Description'),
            ]);
            return redirect()->to('categories');
        }

        return view('categories/edit', $data);
    }

    // Delete a category (Admin only)
    public function delete($id)
    {
        parent::checkRole();
        $this->categoryModel->delete($id);
        return redirect()->to('categories');
    }
}
