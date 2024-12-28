<?= $this->include('partials/head') ?>
<div class="lang-navbar p-2">
    <div class="btn-group">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-globe"></i>
        </a>
        <div class="dropdown-menu">
            <a href="switch-language/en" class="nav-link p-2">
                <img src="<?= base_url('assets/flags/us.svg');?>" alt="US Flag" width="23" height="15" />
                English
            </a>
            <a href="switch-language/de" class="nav-link p-2">
                <img src="<?= base_url('assets/flags/de.svg');?>" alt="US Flag" width="23" height="15" />
                Deutsch
            </a>
            <a href="switch-language/ar" class="nav-link p-2">
                <img src="<?= base_url('assets/flags/sy.svg');?>" alt="US Flag" width="23" height="15" />
                عربي
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="offset-md-4 col-md-4 offset-md-4">
            <h1><span><?=lang('Auth.login')?></span></h1>
            <?php if (isset($error)): ?>
                <p style="color:red;"><?= $error ?></p>
            <?php endif; ?>

            <?= form_open('/login') ?>
            <div>
                <label for="email"><?=lang('Email.email')?></label>
                <input type="email" name="email" id="email" value="<?= set_value('email') ?>">
            </div>
            <div>
                <label for="password"><?=lang('Auth.password')?></label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label>
                    <input type="checkbox" name="remember" id="remember"> <?=lang('Auth.rememberMe')?>
                </label>
            </div>
            <button type="submit"><?=lang('Auth.login')?></button>
            <?= form_close() ?>
        </div>
    </div>
</div>
<?= $this->include('partials/foot') ?>
