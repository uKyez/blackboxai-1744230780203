<?php
namespace App\Controllers;

use App\Core\Controller;

class AuthController extends Controller
{
    public function login()
    {
        $this->view->render('auth/login');
    }

    public function register()
    {
        $this->view->render('auth/register');
    }

    public function handleLogin()
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        
        // Basic validation
        if (empty($email) || empty($password)) {
            $this->view->render('auth/login', [
                'error' => 'Please fill all fields'
            ]);
            return;
        }

        // TODO: Add database authentication
        echo "Login attempt for: $email";
    }

    public function handleRegister() 
    {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        
        // Basic validation
        if (empty($name) || empty($email) || empty($password)) {
            $this->view->render('auth/register', [
                'error' => 'Please fill all fields'
            ]);
            return;
        }

        // TODO: Add database registration
        echo "Registration attempt for: $name ($email)";
    }
}
