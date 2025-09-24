<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \App\Model\Entity\User $currentUser
 */
$this->assign('title', 'Add User - CakePHP Learning Lab');
?>

<div class="dashboard-layout">
    <!-- Left Sidebar - 10% width -->
    <div class="dashboard-sidebar">
        <nav class="sidebar-nav">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="<?= $this->Url->build(['controller' => 'Dashboard', 'action' => 'index']) ?>" class="nav-link">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>" class="nav-link active">
                        Users
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Right Content Area - 90% width -->
    <div class="dashboard-content">
        <div class="dashboard-content-main">
            <div class="dashboard-header">
                <h1>Add New User</h1>
                <p>Create a new user account in the system</p>

            </div>

            <div class="users-actions">
                <a href="<?= $this->Url->build(['action' => 'index']) ?>" class="btn btn-outline">Back to Users List</a>
            </div>

            <?= $this->Flash->render() ?>

            <div class="form-container">
                <div class="auth-card">
                    <?= $this->Form->create($user) ?>

                    <div class="form-group">
                        <?= $this->Form->control('name', [
                            'type' => 'text',
                            'label' => 'Full Name',
                            'class' => 'form-control',
                            'placeholder' => 'Enter full name',
                            'required' => true
                        ]) ?>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->control('email', [
                            'type' => 'email',
                            'label' => 'Email Address',
                            'class' => 'form-control',
                            'placeholder' => 'Enter email address',
                            'required' => true
                        ]) ?>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->control('password', [
                            'type' => 'password',
                            'label' => 'Password',
                            'class' => 'form-control',
                            'placeholder' => 'Enter password',
                            'required' => true
                        ]) ?>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->control('confirm_password', [
                            'type' => 'password',
                            'label' => 'Confirm Password',
                            'class' => 'form-control',
                            'placeholder' => 'Confirm password',
                            'required' => true
                        ]) ?>
                    </div>

                    <div class="form-actions">
                        <?= $this->Form->button('Create User', ['class' => 'btn btn-primary btn-full']) ?>
                    </div>

                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
