<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \App\Model\Entity\User $currentUser
 */
$this->assign('title', 'Edit User - CakePHP Learning Lab');
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
                <h1>Edit User: <?= h($user->name) ?></h1>
                <p>Update user information in the system</p>

            </div>

            <div class="users-actions">
                <a href="<?= $this->Url->build(['action' => 'index']) ?>" class="btn btn-outline">Back to Users List</a>
                <a href="<?= $this->Url->build(['action' => 'view', $user->id]) ?>" class="btn btn-outline">View User</a>
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
                            'label' => 'New Password (leave blank to keep current)',
                            'class' => 'form-control',
                            'placeholder' => 'Enter new password',
                            'required' => false,
                            'value' => ''
                        ]) ?>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->control('confirm_password', [
                            'type' => 'password',
                            'label' => 'Confirm New Password',
                            'class' => 'form-control',
                            'placeholder' => 'Confirm new password',
                            'required' => false,
                            'value' => ''
                        ]) ?>
                    </div>

                    <div class="form-actions">
                        <?= $this->Form->button('Update User', ['class' => 'btn btn-primary btn-full']) ?>
                    </div>

                    <?= $this->Form->end() ?>

                    <div class="form-actions" style="margin-top: 20px; text-align: center;">
                        <?= $this->Form->postLink(
                            'Delete User',
                            ['action' => 'delete', $user->id],
                            [
                                'confirm' => __('Are you sure you want to delete user "{0}"?', $user->name),
                                'class' => 'btn btn-outline'
                            ]
                        ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
