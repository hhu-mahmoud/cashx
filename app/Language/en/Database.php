<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Database language settings
return [
    'invalidEvent'                     => '{0} is not a valid model event callback.',
    'invalidArgument'                  => 'Invalid argument: {0}.',
    'invalidAllowedFields'             => 'No allowed fields specified for the model: {0}',
    'emptyDataset'                     => 'No data found for: {0}.',
    'emptyPrimaryKey'                  => 'No primary key is defined for creating {0}.',
    'failGetFieldData'                 => 'Unable to retrieve field data from the database.',
    'failGetIndexData'                 => 'Unable to retrieve index data from the database.',
    'failGetForeignKeyData'            => 'Unable to retrieve foreign key data from the database.',
    'parseStringFail'                  => 'Failed to parse the key string.',
    'featureUnavailable'               => 'This feature is not available for the database in use.',
    'tableNotFound'                    => 'The table `{0}` could not be found in the current database.',
    'noPrimaryKey'                     => 'The model `{0}` does not define a primary key.',
    'noDateFormat'                     => 'The model `{0}` does not have a valid date format ($dateFormat).',
    'fieldNotExists'                   => 'Field `{0}` not found.',
    'forEmptyInputGiven'               => 'Empty statement given for field `{0}`.',
    'forFindColumnHaveMultipleColumns' => 'Only a single column name may be defined.',
    'methodNotAvailable'               => '`{1}` cannot be used in `{0}`. This is a method of the `Query Builder` class.',

];
