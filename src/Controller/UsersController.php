<?php
declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        // Load Flash component
        $this->loadComponent('Flash');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        // Check if user is logged in for all actions
        $session = $this->request->getSession();
        if (!$session->check('Auth.User')) {
            $this->Flash->error(__('You need to login first.'));
            return $this->redirect(['controller' => 'Auth', 'action' => 'login']);
        }

        // Get current user data for all actions
        $currentUser = $session->read('Auth.User');
        $this->set('currentUser', $currentUser);
    }

    public function index()
    {
        $usersTable = $this->fetchTable('Users');
        $users = $this->paginate($usersTable);
        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $usersTable = $this->fetchTable('Users');
        $user = $usersTable->get($id, [
            'contain' => [],
        ]);
        $this->set(compact('user'));
    }

    public function add()
    {
        $usersTable = $this->fetchTable('Users');
        $user = $usersTable->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $usersTable->patchEntity($user, $this->request->getData());
            if ($usersTable->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function edit($id = null)
    {


        // Check if ID is provided
        if ($id === null) {
            $this->Flash->error(__('Invalid user ID.'));
            return $this->redirect(['action' => 'index']);
        }

        $usersTable = $this->fetchTable('Users');

        try {
            $user = $usersTable->get($id, [
                'contain' => [],
            ]);
        } catch (\Exception $e) {
            $this->Flash->error(__('User not found.'));
            return $this->redirect(['action' => 'index']);
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $usersTable->patchEntity($user, $this->request->getData());
            if ($usersTable->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        // Check if ID is provided
        if ($id === null) {
            $this->Flash->error(__('Invalid user ID.'));
            return $this->redirect(['action' => 'index']);
        }

        $usersTable = $this->fetchTable('Users');

        try {
            $user = $usersTable->get($id);
        } catch (\Exception $e) {
            $this->Flash->error(__('User not found.'));
            return $this->redirect(['action' => 'index']);
        }

        if ($usersTable->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
