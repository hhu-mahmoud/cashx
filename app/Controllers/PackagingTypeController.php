<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PackagingTypeModel;

class PackagingTypeController extends BaseController
{
    protected PackagingTypeModel $packagingTypeModel;

    public function __construct()
    {
        parent::__construct();
        $this->packagingTypeModel = new PackagingTypeModel();
    }

    // Display all currencies
    public function index(): string
    {
        $data['packagingtype'] = $this->packagingTypeModel->findAll();
        return view('packagingtype/index', $data);
    }

    // Add a new supplier (Admin only)

    /**
     * @throws \ReflectionException
     */
    public function create(): string|\CodeIgniter\HTTP\RedirectResponse
    {
        parent::checkRole();

        if ($this->request->getMethod() === 'POST') {
            $this->packagingTypeModel->save([
                'PackagingTypeName'   => $this->request->getPost('PackagingTypeName'),
                'PackagingTypeDescription'   => $this->request->getPost('PackagingTypeDescription')
            ]);
            return redirect()->to('packagingtype');
        }

        return view('packagingtype/create');
    }

    // Edit a supplier (Admin only)

    /**
     * @throws \ReflectionException
     */
    public function edit($id): string|\CodeIgniter\HTTP\RedirectResponse
    {
        parent::checkRole();
        $data['packagingtype'] = $this->packagingTypeModel->find($id);
        if ($this->request->getMethod() === 'POST') {
            $this->packagingTypeModel->update($id, [
                'PackagingTypeName'   => $this->request->getPost('PackagingTypeName'),
                'PackagingTypeDescription'   => $this->request->getPost('PackagingTypeDescription')
            ]);
            return redirect()->to('packagingtype');
        }

        return view('packagingtype/edit', $data);
    }

    // Delete a supplier (Admin only)
    public function delete($id): \CodeIgniter\HTTP\RedirectResponse
    {
        parent::checkRole();
        $this->packagingTypeModel->delete($id);
        return redirect()->to('packagingtype');
    }
}
