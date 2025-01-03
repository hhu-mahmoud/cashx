<?= $this->include('partials/head') ?>
<?php $session = session(); ?>
    <!-- HEADER: MENU -->

    <section id="sidebar">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="<?= base_url('dashboard'); ?>" class="nav-link"><i
                                    class="fas fa-tachometer-alt me-2"></i><span><?= lang('App.dashboard') ?></span></a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link btn btn-toggle align-items-center rounded"
                                data-bs-toggle="collapse" data-bs-target="#categories-collapse" aria-expanded="true">
                            <span><i class="fas fa-cube"></i> <?= lang('Categories.categories') ?></span>
                        </button>
                        <div class="collapse show" id="categories-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal  small">
                                <li class="nav-item">
                                    <a href="<?= base_url('categories'); ?>" class="nav-link">
                                        <span><i class="fas fa-layer-group"></i> <?= lang('Categories.categoryManagement') ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link btn btn-toggle align-items-center rounded"
                                data-bs-toggle="collapse" data-bs-target="#suppliers-collapse" aria-expanded="true">
                            <span><i class="fas fa-handshake"></i> <?= lang('Suppliers.suppliers') ?></span>
                        </button>
                        <div class="collapse show" id="suppliers-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal  small">
                                <li class="nav-item">
                                    <a href="<?= base_url('suppliers'); ?>" class="nav-link">
                                        <span><i class="fas fa-layer-group"></i> <?= lang('Suppliers.suppliersManagement') ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link btn btn-toggle align-items-center rounded"
                                data-bs-toggle="collapse" data-bs-target="#settings-collapse" aria-expanded="true">
                            <span><i class="fas fa-cog"></i> <?= lang('App.settings') ?></span>
                        </button>
                        <div class="collapse show" id="settings-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal  small">
                                <li class="nav-item">
                                    <a href="<?= base_url('currencies'); ?>" class="nav-link">
                                        <span><i class="fas fa-layer-group"></i> <?= lang('Currencies.currencyManagement') ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('notes'); ?>" class="nav-link"><i
                                    class="fas fa-sticky-note me-2"></i><span><?= lang('Notes.notes') ?></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <section id="navbar">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= base_url('dashboard'); ?>"><span><?= lang('App.appName') ?></span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-globe"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="<?= base_url('switch-language/en'); ?>"><img
                                                src="<?= base_url('assets/flags/us.svg'); ?>" alt="US Flag"
                                                width="23" height="15"/> English</a>
                                </li>
                                <li><a class="dropdown-item" href="<?= base_url('switch-language/de'); ?>"> <img
                                                src="<?= base_url('assets/flags/de.svg'); ?>" alt="US Flag"
                                                width="23" height="15"/>
                                        Deutsch</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('switch-language/ar'); ?>"> <img
                                                src="<?= base_url('assets/flags/sy.svg'); ?>" alt="US Flag"
                                                width="23" height="15"/>
                                        عربي</a></li>
                            </ul>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?= base_url('assets/images/user_avatar.png'); ?>" alt="User Avatar"
                                     class="user-avatar" width="23" height="15"/>
                                <?php
                                if ($session->has('username')) {
                                    echo $session->get('firstname') . " " . $session->get('lastname') . " (" . $session->get('user_role') . ")";
                                }
                                ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profile"><i
                                                class="fas fa-user me-2"></i><span><?= lang('App.profile') ?></span></a>
                                </li>
                                <li><a class="dropdown-item" href="settings"><i
                                                class="fas fa-cogs me-2"></i><span><?= lang('App.settings') ?></span></a>
                                </li>
                                <li><a class="dropdown-item" href="logout"><i
                                                class="fas fa-sign-out-alt me-2"></i><span><?= lang('Auth.logout') ?></span></a>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section id="content">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
        </main>
    </section>

<?= $this->include('partials/foot') ?>