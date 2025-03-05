<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmpModel;

class DashboardController extends Controller
{
    protected $session;

    public function __construct()
    {
        
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        
        if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        
        $empModel = new EmpModel();

        
        $data = [
            'username' => $this->session->get('username'),
            'employees' => $empModel->findAll()
        ];

        
        return view('dashboard', $data);
    }
    public function logout()
    {
        
        $this->session->destroy();

        
        return redirect()->to('/login');
    }

}
