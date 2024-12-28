<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cookie language settings
return [
    'invalidExpiresTime'    => 'Invalid "{0}" data type for the "Expires" attribute. Expected: String, Integer, or DateTimeInterface object.',
    'invalidExpiresValue'   => 'The cookie expiration date is invalid.',
    'invalidCookieName'     => 'The cookie "{0}" contains invalid characters.',
    'emptyCookieName'       => 'The cookie name cannot be empty.',
    'invalidSecurePrefix'   => 'The "__Secure-" prefix requires the "Secure" attribute.',
    'invalidHostPrefix'     => 'Using the "__Host-" prefix must be accompanied by the "Secure" flag, cannot have a "Domain" attribute, and the "Path" must be set to "/".',
    'invalidSameSite'       => 'The SameSite setting can only be None, Lax, Strict, or an empty string. Given: {0}',
    'invalidSameSiteNone'   => 'When the "SameSite=None" attribute is set, the "Secure" attribute must also be set.',
    'invalidCookieInstance' => 'The class "{0}" expected the cookie array to be an instance of "{1}" but received "{2}" at index {3}.',
    'unknownCookieInstance' => 'The cookie object with the name "{0}" and the prefix "{1}" was not found in the collection.',

];
