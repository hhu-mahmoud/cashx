<?= $this->include('partials/head') ?>
<!-- HEADER: MENU -->
<header>

</header>
<section id="sidebar">
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <h2 class="text-white text-center">CashX</h2>
    <a href="home"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
    <a href="profile"><i class="fas fa-user me-2"></i>Profile</a>
    <a href="settings"><i class="fas fa-cogs me-2"></i>Settings</a>
    <a href="logout"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
    <!-- Toggle Button -->

</div>
</section>
<section id="content">
<!-- Main Content -->
<div class="main-content" id="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-bell"></i> Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Messages</a>
                    </li>
                    <!-- User Avatar and Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?= base_url('assets/images/user_avatar.png'); ?>" alt="User Avatar" class="user-avatar">
                            John Doe
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="profile">Profile</a></li>
                            <li><a class="dropdown-item" href="settings">Settings</a></li>
                            <li><a class="dropdown-item" href="logout">Logout</a></li>
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
    <a href="https://www.heyit.org/">Copyright &copy; <?= date('Y') ?> Heyit</a>
</div>
</section>
<?= $this->include('partials/foot') ?>