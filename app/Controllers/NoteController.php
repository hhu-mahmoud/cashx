<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NoteModel;

class NoteController extends BaseController
{
    protected NoteModel $noteModel;

    public function __construct()
    {
        parent::__construct();
        $this->noteModel = new NoteModel();
    }

    // Display all currencies
    public function index(): string
    {
        $data['notes'] = $this->noteModel->findAll();
        return view('notes/index', $data);
    }

    // Add a new supplier (Admin only)

    /**
     * @throws \ReflectionException
     */
    public function create(): string|\CodeIgniter\HTTP\RedirectResponse
    {
        parent::checkRole();

        if ($this->request->getMethod() === 'POST') {
            $this->noteModel->save([
                'RelatedTo'   => $this->request->getPost('RelatedTo'),
                'NoteContent'   => $this->request->getPost('NoteContent')
            ]);
            return redirect()->to('notes');
        }

        return view('notes/create');
    }

    // Edit a supplier (Admin only)

    /**
     * @throws \ReflectionException
     */
    public function edit($id): string|\CodeIgniter\HTTP\RedirectResponse
    {
        parent::checkRole();
        $data['notes'] = $this->noteModel->find($id);
        if ($this->request->getMethod() === 'POST') {
            $this->noteModel->update($id, [
                'RelatedTo'   => $this->request->getPost('RelatedTo'),
                'NoteContent'   => $this->request->getPost('NoteContent')
            ]);
            return redirect()->to('notes');
        }

        return view('notes/edit', $data);
    }

    // Delete a supplier (Admin only)
    public function delete($id): \CodeIgniter\HTTP\RedirectResponse
    {
        parent::checkRole();
        $this->noteModel->delete($id);
        return redirect()->to('notes');
    }
}
