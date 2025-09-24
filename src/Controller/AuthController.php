<?php
namespace App\Controller;
use App\Controller\AppController;

class AuthController extends AppController
{
    public function signup()
    {
        $usersTable = $this->fetchTable('Users');
        $user = $usersTable->newEmptyEntity();

        // GET request - Show signup form
        if ($this->request->is('get')) {
            $this->set(compact('user'));
            return;
        }

        // POST request - Process signup form
        if ($this->request->is('post')) {
            // Patch entity with form data
            $user = $usersTable->patchEntity($user, $this->request->getData());

            // Attempt to save the user
            if ($usersTable->save($user)) {
                // Successfully created user
                $this->Flash->success('Account created successfully! Please login to continue.');

                // Redirect to login page
                return $this->redirect(['action' => 'login']);
            } else {
                // Validation errors occurred
                $this->Flash->error('There were some problems with your registration. Please check the form and try again.');

                // Set the user entity with errors for the view
                $this->set(compact('user'));
            }
        }
    }

    public function login()
    {
        // GET request - Show login form
        if ($this->request->is('get')) {
            // Just render the login template
            return;
        }

        // POST request - Process login form
        if ($this->request->is('post')) {
            $email = $this->request->getData('email');
            $password = $this->request->getData('password');

            // Basic validation
            if (empty($email) || empty($password)) {
                $this->Flash->error('Please enter both email and password.');
                return;
            }

            // Find user by email
            $usersTable = $this->fetchTable('Users');
            $user = $usersTable->find()
                ->where(['email' => $email])
                ->first();

            // Check if user exists and password is correct
            if ($user && $user->verifyPassword($password)) {
                // Login successful - create session
                $this->Flash->success('Welcome back, ' . h($user->name) . '!');

                // Create user session
                $this->request->getSession()->write('Auth.User', [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email
                ]);

                // Redirect to dashboard
                return $this->redirect(['controller' => 'Dashboard', 'action' => 'index']);
            } else {
                // Login failed
                $this->Flash->error('Invalid email or password. Please try again.');
            }
        }
    }

    public function logout()
    {
        // Destroy user session
        $this->request->getSession()->delete('Auth.User');
        // Clear all session data for security
        $this->request->getSession()->destroy();
        $this->Flash->success('You have been logged out successfully.');
        return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
    }

}
