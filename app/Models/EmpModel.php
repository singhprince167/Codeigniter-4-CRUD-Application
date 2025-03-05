<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpModel extends Model
{
    protected $table = 'emp';
    protected $primaryKey = 'id'; 

    protected $allowedFields = ['name', 'email', 'phone', 'salary'];

    
    protected $validationRules = [
        'name' => 'required|string',
        'email' => 'required|valid_email',
        'phone' => 'required|numeric',
        'salary' => 'required|numeric'
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Name is required.',
        ],
        'email' => [
            'required' => 'Email is required.',
            'valid_email' => 'Please enter a valid email address.',
        ],
        'phone' => [
            'required' => 'Phone number is required.',
            'numeric' => 'Phone number must be numeric.',
        ],
        'salary' => [
            'required' => 'Salary is required.',
            'numeric' => 'Salary must be numeric.',
        ],
    ];
}
