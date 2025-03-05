<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmpModel;

class EmpController extends Controller


{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }


    public function index()
    {
        $model = new EmpModel();
        if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }
        return view('emp_form');
    }

    public function store()
    {
        $model = new EmpModel();

        
        $data = [
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'phone'  => $this->request->getPost('phone'),
            'salary' => $this->request->getPost('salary'),
        ];

        
        if (!$model->insert($data)) {
            
            return redirect()->to('/dashboard')->withInput()->with('errors', $model->errors());
        }

        
        return redirect()->to('/dashboard')->with('success', 'Employee data successfully submitted.');
    }

    public function edit($id = null)
    {
        $model = new EmpModel();
        if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        
        $data['employee'] = $model->find($id);

        
        if (!$data['employee']) {
            return redirect()->to('/dashboard')->with('error', 'Employee not found.');
        }

       
        return view('emp_edit', $data);
    }

    public function update()
    {
        $model = new EmpModel();
        $id = $this->request->getPost('id');
        if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        
        $data = [
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'phone'  => $this->request->getPost('phone'),
            'salary' => $this->request->getPost('salary'),
        ];

        
        if (!$model->update($id, $data)) {
            
            return redirect()->to('/emp/edit/' . $id)->withInput()->with('errors', $model->errors());
        }

        
        return redirect()->to('/dashboard')->with('success', 'Employee data successfully updated.');
    }

    public function delete($id = null)
    {
        if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }
        $model = new EmpModel();

        
        if (!$model->find($id)) {
            return redirect()->to('/dashboard')->with('error', 'Employee not found.');
        }

        
        $model->delete($id);

        
        return redirect()->to('/dashboard')->with('success', 'Employee successfully deleted.');
    }
}

