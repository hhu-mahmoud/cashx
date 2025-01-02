<?= $this->include('partials/head') ?>
<?php $session = session(); ?>
<div class="row">
    <div class="col-md-12 text-center mt-5">
        <h1 style="color: red;">Access Denied</h1>
        <p class="message">You do not have permission to view this page.</p>
        <a href="dashboard">Go to Homepage</a>
        <section id="footer">
            <!-- Footer -->
            <div class="footer">
                <a href="https://www.heyit.org/"><?=lang('App.copyright',[date('Y')])?> Heyit</a>
            </div>
        </section>
    </div>
</div>

<?= $this->include('partials/foot') ?>
