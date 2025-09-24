<?php
$this->assign('title', 'Dashboard - CakePHP Learning Lab');
?>

<div class="dashboard-layout">
    <!-- Left Sidebar - 10% width -->
    <div class="dashboard-sidebar">
        <nav class="sidebar-nav">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="<?= $this->Url->build(['controller' => 'Dashboard', 'action' => 'index']) ?>" class="nav-link active">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>" class="nav-link">
                        Users
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Right Content Area - 90% width -->
    <div class="dashboard-content">
        <!-- Dashboard Section -->
        <div class="dashboard-content-main">
            <div class="dashboard-header">
                <h1>Welcome to Your Dashboard</h1>
                <p>Hello, <strong><?= h($currentUser['name']) ?></strong>! You're successfully logged in.</p>
            </div>

            <div class="dashboard-grid">
            </div>
        </div>
    </div>
</div>

<!-- No JavaScript needed since Users link navigates to separate controller -->
