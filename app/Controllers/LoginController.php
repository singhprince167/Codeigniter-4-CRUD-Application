<?php


namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class LoginController extends Controller
{
    protected $session;

    public function __construct()
    {
        
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        
        return view('login');
    }

    public function login()
    {
        
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        
        if (!$username || !$password) {
            return redirect()->back()->withInput()->with('error', 'Please enter both username and password');
        }

        
        $userModel = new UserModel();

        
        $user = $userModel->where('username', $username)->first();

        if (!$user) {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password');
        }

        
        if ($password !== $user['password']) {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password');
        }

        
        $this->session->set('logged_in', true);
        $this->session->set('username', $username);

        
        return redirect()->to('/dashboard');
    }
}
