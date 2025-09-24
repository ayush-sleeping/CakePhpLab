<?php
/**
 * @var \App\View\AppView $this
 * @var array $currentUser
 */
$this->assign('title', 'Dashboard - CakePHP Learning Lab');
?>

<div class="dashboard-container">
    <div class="dashboard-header">
        <h1>Welcome to Your Dashboard</h1>
        <p>Hello, <strong><?= h($currentUser['name']) ?></strong>! You're successfully logged in.</p>
    </div>

    <div class="dashboard-content">
        <div class="dashboard-grid">
        </div>
    </div>
</div>

<style>
.dashboard-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
}

.dashboard-header {
    text-align: center;
    margin-bottom: 50px;
    padding-bottom: 30px;
    border-bottom: 1px solid #e0e0e0;
}

.dashboard-header h1 {
    font-size: 36px;
    margin-bottom: 15px;
    color: #333;
    font-weight: normal;
}

.dashboard-header p {
    font-size: 18px;
    color: #666;
}

.dashboard-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.dashboard-card {
    background: white;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    overflow: hidden;
    transition: box-shadow 0.3s ease;
}

.dashboard-card:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.card-header {
    background: #fafafa;
    padding: 20px;
    border-bottom: 1px solid #e0e0e0;
}

.card-header h3 {
    margin: 0;
    font-size: 20px;
    color: #333;
    font-weight: normal;
}

.card-body {
    padding: 20px;
}

.card-body p {
    margin-bottom: 10px;
    color: #666;
}

.card-body ul {
    margin: 15px 0;
    padding-left: 20px;
}

.card-body li {
    margin-bottom: 5px;
    color: #666;
}

.card-footer {
    padding: 20px;
    background: #fafafa;
    border-top: 1px solid #e0e0e0;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.btn-outline {
    background: transparent;
    border: 1px solid #333;
    color: #333;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.btn-outline:hover {
    background: #333;
    color: white;
    text-decoration: none;
}

@media (max-width: 768px) {
    .dashboard-container {
        padding: 20px 15px;
    }

    .dashboard-header h1 {
        font-size: 28px;
    }

    .dashboard-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .card-footer {
        flex-direction: column;
    }

    .btn-outline {
        text-align: center;
    }
}
</style>
