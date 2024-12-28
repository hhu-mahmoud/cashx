<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'No rule set specified in the validation configuration.',
    'ruleNotFound'    => '{0} is not a valid rule.',
    'groupNotFound'   => '{0} is not a group of validation rules.',
    'groupNotArray'   => 'The {0} rule group must be an array.',
    'invalidTemplate' => '{0} is not a valid validation template.',

    // Rule Messages
    'alpha'                 => 'The {field} field may only contain alphabetical characters.',
    'alpha_dash'            => 'The {field} field may only contain alphanumeric characters, underscores, and dashes.',
    'alpha_numeric'         => 'The {field} field may only contain alphanumeric characters.',
    'alpha_numeric_punct'   => 'The {field} field may only contain alphanumeric characters, spaces, and ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => 'The {field} field may only contain alphanumeric characters and spaces.',
    'alpha_space'           => 'The {field} field may only contain alphabetical characters and spaces.',
    'decimal'               => 'The {field} field must contain a decimal number.',
    'differs'               => 'The {field} field must differ from the {param} field.',
    'equals'                => 'The {field} field must exactly match {param}.',
    'exact_length'          => 'The {field} field must be exactly {param} characters long.',
    'field_exists'          => 'The {field} field must exist.',
    'greater_than'          => 'The {field} field must contain a number greater than {param}.',
    'greater_than_equal_to' => 'The {field} field must contain a number greater than or equal to {param}.',
    'hex'                   => 'The {field} field may only contain hexadecimal characters.',
    'in_list'               => 'The {field} field must be one of the following values: {param}.',
    'integer'               => 'The {field} field must contain an integer.',
    'is_natural'            => 'The {field} field may only contain digits.',
    'is_natural_no_zero'    => 'The {field} field may only contain digits and must be greater than zero.',
    'is_not_unique'         => 'The {field} field must contain a value that already exists in the database.',
    'is_unique'             => 'The {field} field must contain a unique value.',
    'less_than'             => 'The {field} field must contain a number less than {param}.',
    'less_than_equal_to'    => 'The {field} field must contain a number less than or equal to {param}.',
    'matches'               => 'The {field} field does not match the {param} field.',
    'max_length'            => 'The {field} field may not exceed {param} characters in length.',
    'min_length'            => 'The {field} field must be at least {param} characters long.',
    'not_equals'            => 'The {field} field must not equal {param}.',
    'not_in_list'           => 'The {field} field must be an element of this list: {param}.',
    'numeric'               => 'The {field} field may only contain numbers.',
    'regex_match'           => 'The {field} field is not in the correct format.',
    'required'              => 'The {field} field is required.',
    'required_with'         => 'The {field} field is required when {param} is present.',
    'required_without'      => 'The {field} field is required when {param} is not present.',
    'string'                => 'The {field} field must contain a valid string.',
    'timezone'              => 'The {field} field must be a valid timezone.',
    'valid_base64'          => 'The {field} field must contain a valid base64 string.',
    'valid_email'           => 'The {field} field must contain a valid email address.',
    'valid_emails'          => 'The {field} field must contain valid email addresses.',
    'valid_ip'              => 'The {field} field must contain a valid IP address.',
    'valid_url'             => 'The {field} field must contain a valid URL.',
    'valid_url_strict'      => 'The {field} field must contain a valid URL.',
    'valid_date'            => 'The {field} field must contain a valid date.',
    'valid_json'            => 'The {field} field must contain a valid json string.',

    // Credit Cards
    'valid_cc_num' => 'The {field} field does not appear to contain a valid credit card number.',

    // Files
    'uploaded' => 'The {field} field does not contain a valid uploaded file.',
    'max_size' => 'The {field} field contains a file that is too large.',
    'is_image' => 'The {field} field does not contain a valid uploaded image file.',
    'mime_in'  => 'The {field} field does not contain a valid mime type.',
    'ext_in'   => 'The {field} field does not contain a valid file extension.',
    'max_dims' => 'The {field} field does not contain an image, or the image is too wide or too tall.',

];
