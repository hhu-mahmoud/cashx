<?= $this->include('partials/head') ?>
<?php $session = session(); ?>
<!-- HEADER: MENU -->
<header>

</header>
<section id="sidebar">
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <h2 class="text-white text-center"><span><?=lang('App.appName')?></span></h2>
    <a href="dashboard"><i class="fas fa-tachometer-alt me-2"></i><span><?=lang('App.dashboard')?></span></a>
    <!-- Toggle Button -->

</div>
</section>
<section id="content">
<!-- Main Content -->
<div class="main-content" id="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#"><i class="fas fa-bell"></i> <span>--><?php //=lang('App.notifications')?><!--</span></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#"><i class="fas fa-envelope"></i> <span>--><?php //=lang('App.messages')?><!--</span></a>-->
<!--                    </li>-->
                    <!-- User Avatar and Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?= base_url('assets/images/user_avatar.png'); ?>" alt="User Avatar" class="user-avatar">
                            <?php
                            if ($session->has('username')) {
                                echo $session->get('firstname'). " " . $session->get('lastname');
                            }
                            ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="profile"><i class="fas fa-user me-2"></i><span><?=lang('App.profile')?></span></a></li>
                            <li><a class="dropdown-item" href="settings"><i class="fas fa-cogs me-2"></i><span><?=lang('App.settings')?></span></a></li>
                            <li><a class="dropdown-item" href="logout"><i class="fas fa-sign-out-alt me-2"></i><span><?=lang('Auth.logout')?></span></a></li>
                        </ul>

                    </li>
                    <!-- User Avatar and Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-globe"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="switch-language/en"><img src="<?= base_url('assets/flags/us.svg');?>" alt="US Flag" width="23" height="15" /> English</a>
                            </li>
                            <li><a class="dropdown-item" href="switch-language/de"> <img src="<?= base_url('assets/flags/de.svg');?>" alt="US Flag" width="23" height="15" />
                                    Deutsch</a></li>
                            <li><a class="dropdown-item" href="switch-language/ar"> <img src="<?= base_url('assets/flags/sy.svg');?>" alt="US Flag" width="23" height="15" />
                                    عربي</a></li>
                        </ul>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container">
        <!-- Additional Content (Charts, Tables, etc.) -->
        <div class="row mt-5">
            <div class="col-md-12">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>
</div>
</section>
<section id="footer">
<!-- Footer -->
<div class="footer">
    <a href="https://www.heyit.org/"><?=lang('App.copyright',[date('Y')])?> Heyit</a>
</div>
</section>
<?= $this->include('partials/foot') ?>