<?= $this->include('partials/head') ?>
    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4 offset-md-4">
                <div class="form-header">
                    <h1>Register</h1>
                </div>
                <?= form_open('/register') ?>
                <div>
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
                </div>
                <div>
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" value="<?= set_value('lastname') ?>">
                </div>
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?= set_value('username') ?>">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?= set_value('email') ?>">
                </div>
                <button type="submit">Register</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
<?= $this->include('partials/foot') ?>