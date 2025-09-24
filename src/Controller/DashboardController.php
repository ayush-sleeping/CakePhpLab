<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;

class DashboardController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->checkUserAuth();
    }

    public function index()
    {
        // Get current user from session
        $currentUser = $this->request->getSession()->read('Auth.User');
        // Pass user data to view
        $this->set(compact('currentUser'));
    }

    /**
     * Check if user is authenticated
     * Redirect to login if not authenticated
     *
     * @return void
     */
    private function checkUserAuth(): void
    {
        if (!$this->request->getSession()->check('Auth.User')) {
            $this->Flash->error('Please login to access the dashboard.');
            $this->redirect(['controller' => 'Auth', 'action' => 'login']);
        }
    }
}
