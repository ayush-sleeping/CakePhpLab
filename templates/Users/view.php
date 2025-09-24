<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \App\Model\Entity\User $currentUser
 */
$this->assign('title', 'View User - CakePHP Learning Lab');
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
                <h1>View User: <?= h($user->name) ?></h1>
                <p>User information details</p>
            </div>

            <div class="users-actions">
                <a href="<?= $this->Url->build(['action' => 'index']) ?>" class="btn btn-outline">Back to Users List</a>
                <a href="<?= $this->Url->build(['action' => 'edit', $user->id]) ?>" class="btn btn-primary">Edit User</a>
            </div>

            <?= $this->Flash->render() ?>

            <div class="users-table-container">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <td><?= $this->Number->format($user->id) ?></td>
                    </tr>
                    <tr>
                        <th>Full Name</th>
                        <td><?= h($user->name) ?></td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td><?= h($user->email) ?></td>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td><?= h($user->created->format('Y-m-d H:i:s')) ?></td>
                    </tr>
                    <tr>
                        <th>Modified</th>
                        <td><?= h($user->modified->format('Y-m-d H:i:s')) ?></td>
                    </tr>
                </table>
            </div>

            <div class="users-actions">
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
