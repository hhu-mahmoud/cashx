<?= $this->include('partials/head') ?>
<div class="container">
    <div class="row">
        <div class="offset-md-4 col-md-4 offset-md-4">
            <h1>CashX Login</h1>
            <?php if (isset($error)): ?>
                <p style="color:red;"><?= $error ?></p>
            <?php endif; ?>

            <?= form_open('/login') ?>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= set_value('email') ?>">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label>
                    <input type="checkbox" name="remember" id="remember"> Remember Me
                </label>
            </div>
            <button type="submit">Login</button>
            <?= form_close() ?>
        </div>
    </div>
</div>
<?= $this->include('partials/foot') ?>
