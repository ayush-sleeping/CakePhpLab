<?php
$this->assign('title', 'Sign Up - CakePHP Learning Lab');
?>

<div class="auth-container">
    <div class="auth-card">
        <h3>Create Account</h3>

        <?= $this->Form->create($user, [
            'type' => 'post',
            'class' => 'auth-form'
        ]) ?>

        <div class="form-group">
            <?= $this->Form->control('name', [
                'type' => 'text',
                'label' => 'Full Name',
                'placeholder' => 'Enter your full name',
                'required' => true,
                'class' => 'form-control'
            ]) ?>
        </div>

        <div class="form-group">
            <?= $this->Form->control('email', [
                'type' => 'email',
                'label' => 'Email Address',
                'placeholder' => 'Enter your email',
                'required' => true,
                'class' => 'form-control'
            ]) ?>
        </div>

        <div class="form-group">
            <?= $this->Form->control('password', [
                'type' => 'password',
                'label' => 'Password',
                'placeholder' => 'Create a password',
                'required' => true,
                'class' => 'form-control'
            ]) ?>
        </div>

        <div class="form-group">
            <?= $this->Form->control('confirm_password', [
                'type' => 'password',
                'label' => 'Confirm Password',
                'placeholder' => 'Confirm your password',
                'required' => true,
                'class' => 'form-control'
            ]) ?>
        </div>

        <div class="form-actions">
            <?= $this->Form->button('Create Account', [
                'type' => 'submit',
                'class' => 'btn btn-primary btn-full'
            ]) ?>
        </div>

        <?= $this->Form->end() ?>

        <div class="auth-links">
            <p>Already have an account?
                <a href="<?= $this->Url->build('/login') ?>">Login</a>
            </p>
        </div>
    </div>
</div>
