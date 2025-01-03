<?= $this->extend('./layouts/layout_dashboard') ?>
<?= $this->section('content') ?>
<?php $session = session(); ?>
    <h1 class="text-center my-4"><?= lang('Notes.notesManagement') ?></h1>
<?php if (session('user_role_id') <= 2): ?>
    <a class=" btn btn-success btn-sm" href="<?= base_url('notes/create'); ?>"
       aria-label="<?= lang('Notes.addNewNote') ?>">
        <span data-feather="plus-circle"><i class="fa fa-plus-circle" aria-hidden="true"></i> <?= lang('Notes.addNewNote') ?></span>
    </a>
<?php endif; ?>
    <div class="table-responsive-md mt-2">
        <table class="table table-striped table-hover table-sm">
            <thead class="table-dark">
            <tr>
                <th scope="col" class="col-md-1 text-center">#</th>
                <th scope="col" class="col-md-3"><?= lang('App.relatedTo') ?></th>
                <th scope="col" class="col-md-3"><?= lang('Notes.note') ?></th>
                <?php if (session('user_role_id') <= 2): ?>
                <th scope="col" class="col-md-1"><?= lang('App.edit') ?></th>
                <th scope="col" class="col-md-1"><?= lang('App.delete') ?></th>
            </tr>
            <?php endif; ?>
            </thead>
            <tbody>
            <?php foreach ($notes as $index => $note): ?>
                <tr>
                    <th scope="row" class="text-center"><?= $index + 1; ?></th>
                    <td><?= $note['RelatedTo']; ?></td>
                    <td><?= $note['NoteContent']; ?></td>
                    <?php if (session('user_role_id') <= 2): ?>
                        <td>
                            <a href="notes/edit/<?= $note['NoteID']; ?>"
                               class="btn btn-warning btn-sm <?= session('user_role_id') > 2 ? 'd-none' : ''; ?>">
                                <i class="fas fa-edit"></i> <?= lang('App.edit') ?>
                            </a>

                        </td>
                        <td>
                            <a href="notes/delete/<?= $note['NoteID']; ?>"
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