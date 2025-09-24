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
