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
                $this->Flash->success('Account created successfully! You are now logged in.');

                // Create session for auto-login after signup
                $this->request->getSession()->write('Auth.User', [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email
                ]);

                // Redirect to dashboard (we'll create this later)
                return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
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

            // TODO: Validate credentials against database
            // TODO: Create session if valid
            // TODO: Redirect to dashboard if successful
            // TODO: Show error message if failed

            $this->Flash->error('Login functionality not implemented yet.');
        }
    }

    public function logout()
    {
        // TODO: Destroy session
        // TODO: Redirect to home page

        $this->Flash->success('You have been logged out.');
        return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
    }

}
