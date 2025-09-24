<?php
/**
 * CakePHP Learning Lab - Default Layout
 * This layout will be used across all pages in the application.
 * Contains: Header navigation, common CSS, HTML structure
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('style') ?>
    <meta name="description" content="CakePHP Learning Lab - Learning CakePHP through practical implementation">
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!-- Navigation Header -->
    <nav class="navbar">
        <div class="nav-container">
            <!-- Left side: Project name -->
            <a href="<?= $this->Url->build('/') ?>" class="logo">
                CakePHP Lab
            </a>
            <!-- Right side: Login/Signup links or User menu -->
            <ul class="nav-links">
                <?php if ($this->request->getSession()->check('Auth.User')): ?>
                    <?php $user = $this->request->getSession()->read('Auth.User'); ?>
                    <li><span class="welcome-text">Welcome, <?= h($user['name']) ?>!</span></li>
                    <li><a href="<?= $this->Url->build('/logout') ?>" class="nav-link">Logout</a></li>
                <?php else: ?>
                    <li><a href="<?= $this->Url->build('/login') ?>" class="nav-link">Login</a></li>
                    <li><a href="<?= $this->Url->build('/signup') ?>" class="btn btn-primary">Sign Up</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- Flash Messages -->
    <?= $this->Flash->render() ?>
    <!-- Page Content -->
    <?= $this->fetch('content') ?>

</body>
</html>
