<?= $this->include('partials/head') ?>
<div class="container">
    <div class="row">
        <div class="offset-md-4 col-md-4 offset-md-4">
            <h1>Set Your New Password</h1>

            <?= form_open('/auth/reset-password?token=' . $token) ?>
            <div>
                <label for="password">New Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password">
            </div>
            <button type="submit">Set Password</button>
            <?= form_close() ?>

            <?php if (isset($validation)) : ?>
                <div class="error"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?= $this->include('partials/foot') ?>
