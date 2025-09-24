<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 * @var \App\Model\Entity\User $currentUser
 */
$this->assign('title', 'Users Management - CakePHP Learning Lab');
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
                <h1>Users Management</h1>
                <p>Manage all registered users in the system</p>

            </div>

            <div class="users-actions">
                <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="btn btn-primary">Add New User</a>
            </div>

            <?= $this->Flash->render() ?>

            <div class="users-table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                            <th><?= $this->Paginator->sort('name', 'Name') ?></th>
                            <th><?= $this->Paginator->sort('email', 'Email') ?></th>
                            <th><?= $this->Paginator->sort('created', 'Created') ?></th>
                            <th class="actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->name) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->created->format('Y-m-d H:i')) ?></td>
                            <td class="actions">
                                <div class="action-buttons">
                                    <a href="<?= $this->Url->build(['action' => 'view', $user->id]) ?>" class="btn-outline">View</a>
                                    <a href="<?= $this->Url->build(['action' => 'edit', $user->id]) ?>" class="btn-outline">Edit</a>
                                    <?= $this->Form->postLink(
                                        'Delete',
                                        ['action' => 'delete', $user->id],
                                        [
                                            'confirm' => __('Are you sure you want to delete user "{0}"?', $user->name),
                                            'class' => 'btn-outline'
                                        ]
                                    ) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <?php if ($this->Paginator->counter('{{pages}}') > 1): ?>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p class="pagination-info">
                    <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
                </p>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>
