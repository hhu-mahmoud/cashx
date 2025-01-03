<?= $this->extend('./layouts/layout_dashboard') ?>
<?= $this->section('content') ?>
<?php $session = session(); ?>
    <h1 class="text-center my-4"><?= lang('Categories.categoryManagement') ?></h1>

    <div class="table-responsive-md">
        <table class="table table-striped table-hover table-sm">
            <thead class="table-dark">
            <tr>
                <th scope="col" class="col-md-1 text-center">#</th>
                <th scope="col" class="col-md-3"><?= lang('Categories.categoryName') ?></th>
                <th scope="col" class="col-md-6"><?= lang('Categories.description') ?></th>
                <?php if (session('user_role_id') <= 2): ?>
                <th scope="col" class="col-md-1"><?= lang('App.edit') ?></th>
                <th scope="col" class="col-md-1"><?= lang('App.delete') ?></th>
            </tr>
            <?php endif; ?>
            </thead>
            <tbody>
            <?php foreach ($categories as $index => $category): ?>
                <tr>
                    <th scope="row" class="text-center"><?= $index + 1; ?></th>
                    <td><?= $category['CategoryName']; ?></td>
                    <td><?= $category['Description']; ?></td>
                    <?php if (session('user_role_id') <= 2): ?>
                        <td>
                            <a href="categories/edit/<?= $category['CategoryID']; ?>"
                               class="btn btn-warning btn-sm <?= session('user_role_id') > 2 ? 'd-none' : ''; ?>">
                                <i class="fas fa-edit"></i> <?= lang('App.edit') ?>
                            </a>

                        </td>
                        <td>
                            <a href="categories/delete/<?= $category['CategoryID']; ?>"
                               class="btn btn-danger btn-sm <?= session('user_role_id') > 2 ? 'd-none' : ''; ?>">
                                <i class="fas fa-trash"></i> <?= lang('App.delete') ?>
                            </a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $this->endSection() ?>