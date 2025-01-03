<?= $this->extend('./layouts/layout_dashboard') ?>
<?= $this->section('content') ?>
<?php $session = session(); ?>
    <h1 class="text-center my-4"><?= lang('Suppliers.suppliersManagement') ?></h1>
<?php if (session('user_role_id') <= 2): ?>
    <a class=" btn btn-success btn-sm" href="<?= base_url('suppliers/create'); ?>"
       aria-label="<?= lang('Suppliers.addNewSupplier') ?>">
        <span data-feather="plus-circle"><i class="fa fa-plus-circle" aria-hidden="true"></i> <?= lang('Suppliers.addNewSupplier') ?></span>
    </a>
<?php endif; ?>
    <div class="table-responsive-md mt-2">
        <table class="table table-striped table-hover table-sm">
            <thead class="table-dark">
            <tr>
                <th scope="col" class="col-md-1 text-center">#</th>
                <th scope="col" class="col-md-3"><?= lang('Suppliers.supplierName') ?></th>
                <th scope="col" class="col-md-3"><?= lang('App.description') ?></th>
                <th scope="col" class="col-md-3"><?= lang('Email.email') ?></th>
                <th scope="col" class="col-md-6"><?= lang('App.phoneNumber') ?></th>
                <th scope="col" class="col-md-6"><?= lang('App.contactInfo') ?></th>
                <th scope="col" class="col-md-6"><?= lang('App.address') ?></th>
                <?php if (session('user_role_id') <= 2): ?>
                <th scope="col" class="col-md-1"><?= lang('App.edit') ?></th>
                <th scope="col" class="col-md-1"><?= lang('App.delete') ?></th>
            </tr>
            <?php endif; ?>
            </thead>
            <tbody>
            <?php foreach ($suppliers as $index => $supplier): ?>
                <tr>
                    <th scope="row" class="text-center"><?= $index + 1; ?></th>
                    <td><?= $supplier['SupplierName']; ?></td>
                    <td><?= $supplier['Description']; ?></td>
                    <td><?= $supplier['Email']; ?></td>
                    <td><?= $supplier['PhoneNumber']; ?></td>
                    <td><?= $supplier['ContactInfo']; ?></td>
                    <td><?= $supplier['Address']; ?></td>
                    <?php if (session('user_role_id') <= 2): ?>
                        <td>
                            <a href="suppliers/edit/<?= $supplier['SupplierID']; ?>"
                               class="btn btn-warning btn-sm <?= session('user_role_id') > 2 ? 'd-none' : ''; ?>">
                                <i class="fas fa-edit"></i> <?= lang('App.edit') ?>
                            </a>

                        </td>
                        <td>
                            <a href="suppliers/delete/<?= $supplier['SupplierID']; ?>"
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