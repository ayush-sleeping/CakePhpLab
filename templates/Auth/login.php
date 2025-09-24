<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="auth-container">
    <div class="auth-card">
        <h2>Login</h2>
        <p>Enter your credentials to access your account</p>

        <?= $this->Form->create(null, [
            'type' => 'post',
            'class' => 'auth-form'
        ]) ?>

        <div class="form-group">
            <?= $this->Form->control('email', [
                'type' => 'email',
                'label' => 'Email Address',
                'required' => true,
                'placeholder' => 'Enter your email',
                'class' => 'form-control'
            ]) ?>
        </div>

        <div class="form-group">
            <?= $this->Form->control('password', [
                'type' => 'password',
                'label' => 'Password',
                'required' => true,
                'placeholder' => 'Enter your password',
                'class' => 'form-control'
            ]) ?>
        </div>

        <div class="form-group">
            <label class="checkbox-container">
                <?= $this->Form->checkbox('remember_me', ['hiddenField' => false]) ?>
                <span class="checkmark"></span>
                Remember me
            </label>
        </div>

        <div class="form-actions">
            <?= $this->Form->button('Login', [
                'type' => 'submit',
                'class' => 'btn btn-primary btn-block'
            ]) ?>
        </div>

        <?= $this->Form->end() ?>

        <div class="auth-links">
            <p>Don't have an account? <?= $this->Html->link('Sign up here', '/signup') ?></p>
            <p><?= $this->Html->link('Forgot your password?', '#') ?></p>
        </div>
    </div>
</div>

<style>
.auth-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 70vh;
    padding: 20px;
}

.auth-card {
    background: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

.auth-card h2 {
    text-align: center;
    margin-bottom: 10px;
    color: #333;
}

.auth-card p {
    text-align: center;
    color: #666;
    margin-bottom: 30px;
}

.auth-form .form-group {
    margin-bottom: 20px;
}

.auth-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: 500;
    color: #333;
}

.auth-form .form-control {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    transition: border-color 0.3s;
}

.auth-form .form-control:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
}

.checkbox-container {
    display: flex;
    align-items: center;
    cursor: pointer;
    font-size: 14px;
}

.checkbox-container input[type="checkbox"] {
    margin-right: 8px;
}

.form-actions {
    margin-top: 30px;
}

.btn {
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    text-align: center;
    transition: background-color 0.3s;
}

.btn-primary {
    background-color: #007bff;
    color: white;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-block {
    width: 100%;
}

.auth-links {
    text-align: center;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #eee;
}

.auth-links p {
    margin: 10px 0;
    font-size: 14px;
}

.auth-links a {
    color: #007bff;
    text-decoration: none;
}

.auth-links a:hover {
    text-decoration: underline;
}
</style>
