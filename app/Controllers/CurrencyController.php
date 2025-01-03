<?php

namespace App\Controllers;

use App\Models\CurrencyModel;
use App\Controllers\BaseController;

class CurrencyController extends BaseController
{
    protected CurrencyModel $currencyModel;

    public function __construct()
    {
        parent::__construct();
        $this->currencyModel = new CurrencyModel();
    }

    // Display all currencies
    public function index(): string
    {
        $data['currencies'] = $this->currencyModel->findAll();
        return view('currencies/index', $data);
    }

    // Add a new currency (Admin only)

    /**
     * @throws \ReflectionException
     */
    public function create(): string|\CodeIgniter\HTTP\RedirectResponse
    {
        parent::checkRole();

        if ($this->request->getMethod() === 'POST') {
            $status = $this->request->getPost('Status') ? 'active' : 'inactive';
            $this->currencyModel->save([
                'CurrencyCode'   => $this->request->getPost('CurrencyCode'),
                'CurrencyName'   => $this->request->getPost('CurrencyName'),
                'CurrencySymbol' => $this->request->getPost('CurrencySymbol'),
                'ExchangeRate'   => $this->request->getPost('ExchangeRate'),
                'Status'         => $status,
            ]);
            return redirect()->to('currencies');
        }

        return view('currencies/create');
    }

    // Edit a currency (Admin only)

    /**
     * @throws \ReflectionException
     */
    public function edit($id): string|\CodeIgniter\HTTP\RedirectResponse
    {
        parent::checkRole();
        $data['currencies'] = $this->currencyModel->find($id);
        if ($this->request->getMethod() === 'POST') {
            $status = $this->request->getPost('Status') ? 'active' : 'inactive';
            $this->currencyModel->update($id, [
                'CurrencyCode'   => $this->request->getPost('CurrencyCode'),
                'CurrencyName'   => $this->request->getPost('CurrencyName'),
                'CurrencySymbol' => $this->request->getPost('CurrencySymbol'),
                'ExchangeRate'   => $this->request->getPost('ExchangeRate'),
                'Status'         => $status,
            ]);
            return redirect()->to('currencies');
        }

        return view('currencies/edit', $data);
    }

    // Delete a currency (Admin only)
    public function delete($id): \CodeIgniter\HTTP\RedirectResponse
    {
        parent::checkRole();
        $this->currencyModel->delete($id);
        return redirect()->to('currencies');
    }
}
