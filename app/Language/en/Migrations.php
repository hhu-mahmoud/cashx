<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'The migrations table must be set.',
    'disabled'      => 'Migrations have been loaded but are either disabled or incorrectly configured.',
    'notFound'      => 'Migration file not found: ',
    'batchNotFound' => 'Target batch number not found: ',
    'empty'         => 'No migration files found',
    'gap'           => 'There is a gap in the migration sequence near version number: ',
    'classNotFound' => 'The migration class "%s" could not be found.',
    'missingMethod' => 'The migration class is missing a "%s" method.',

    // Migration Command
    'migHelpLatest'   => "\t\tMigrate the database to the latest available migration.",
    'migHelpCurrent'  => "\t\tMigrate the database to the version set as current in the configuration.",
    'migHelpVersion'  => "\tMigrate the database to version {v}.",
    'migHelpRollback' => "\tRollback all migrations to version 0.",
    'migHelpRefresh'  => "\t\tUninstall and rerun all migrations to refresh the database.",
    'migHelpSeed'     => "\tProcess the seed data with the name [name].",
    'migCreate'       => "\tCreate a new migration with the name [name]",
    'nameMigration'   => 'Name the migration file',
    'migNumberError'  => 'The migration number must be three digits and there must be no gaps in the sequence.',
    'rollBackConfirm' => 'Do you really want to execute the database rollback?',
    'refreshConfirm'  => 'Do you really want to refresh the database?',

    'latest'            => 'Running new migrations...',
    'generalFault'      => 'Migration failed!',
    'migrated'          => 'Migration completed successfully.',
    'migInvalidVersion' => 'Invalid version number specified.',
    'toVersionPH'       => 'Migrating to version %s...',
    'toVersion'         => 'Migrating to current version...',
    'rollingBack'       => 'Rolling back all migrations to batch number: ',
    'noneFound'         => 'No migrations found.',
    'migSeeder'         => 'Seed data name',
    'migMissingSeeder'  => 'A seed data name must be provided.',
    'nameSeeder'        => 'Name the seed file',
    'removed'           => 'Rolling back to: ',
    'added'             => 'Running: ',

    // Migrate Status
    'namespace' => 'Namespace',
    'filename'  => 'Filename',
    'version'   => 'Version',
    'group'     => 'Group',
    'on'        => 'Migrated on: ',
    'batch'     => 'Batch',

];
