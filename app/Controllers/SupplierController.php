<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SupplierModel;

class SupplierController extends BaseController
{
    protected SupplierModel $supplierModel;

    public function __construct()
    {
        parent::__construct();
        $this->supplierModel = new SupplierModel();
    }

    // Display all currencies
    public function index(): string
    {
        $data['suppliers'] = $this->supplierModel->findAll();
        return view('suppliers/index', $data);
    }

    // Add a new supplier (Admin only)

    /**
     * @throws \ReflectionException
     */
    public function create(): string|\CodeIgniter\HTTP\RedirectResponse
    {
        parent::checkRole();

        if ($this->request->getMethod() === 'POST') {
            $this->supplierModel->save([
                'SupplierName'   => $this->request->getPost('SupplierName'),
                'Description'   => $this->request->getPost('Description'),
                'Email' => $this->request->getPost('Email'),
                'PhoneNumber'   => $this->request->getPost('PhoneNumber'),
                'ContactInfo'   => $this->request->getPost('ContactInfo'),
                'Address'   => $this->request->getPost('Address')
            ]);
            return redirect()->to('suppliers');
        }

        return view('suppliers/create');
    }

    // Edit a supplier (Admin only)

    /**
     * @throws \ReflectionException
     */
    public function edit($id): string|\CodeIgniter\HTTP\RedirectResponse
    {
        parent::checkRole();
        $data['suppliers'] = $this->supplierModel->find($id);
        if ($this->request->getMethod() === 'POST') {
            $this->supplierModel->update($id, [
                'SupplierName'   => $this->request->getPost('SupplierName'),
                'Description'   => $this->request->getPost('Description'),
                'Email' => $this->request->getPost('Email'),
                'PhoneNumber'   => $this->request->getPost('PhoneNumber'),
                'ContactInfo'   => $this->request->getPost('ContactInfo'),
                'Address'   => $this->request->getPost('Address')
            ]);
            return redirect()->to('suppliers');
        }

        return view('suppliers/edit', $data);
    }

    // Delete a supplier (Admin only)
    public function delete($id): \CodeIgniter\HTTP\RedirectResponse
    {
        parent::checkRole();
        $this->supplierModel->delete($id);
        return redirect()->to('suppliers');
    }
}
