<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// HTTP language settings
return [
    // CurlRequest
    'missingCurl'     => 'CURL must be enabled to use the CURLRequest class.',
    'invalidSSLKey'   => 'Cannot set SSL key. {0} is not a valid filename.',
    'sslCertNotFound' => 'SSL certificate not found at: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} is not a valid content type. Valid types: media, charset, encoding, language.',
    'invalidJSON'            => 'JSON string could not be parsed. Error: {0}',
    'unsupportedJSONFormat'  => 'The specified JSON format is not supported.',

    // Message
    'invalidHTTPProtocol' => 'Invalid HTTP protocol version: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'An array of valid content types must always be provided.',

    // RedirectResponse
    'invalidRoute' => 'The route {0} could not be found.',

    // DownloadResponse
    'cannotSetBinary'        => 'Error downloading. Filepath cannot be set to binary.',
    'cannotSetFilepath'      => 'Error in binary download. Cannot set filepath: {0}',
    'notFoundDownloadSource' => 'Error downloading the file.',
    'cannotSetCache'         => 'Download caching is not supported.',
    'cannotSetStatusCode'    => 'Error downloading. Status code could not be set. Code: {0}, Reason: {1}',

    // Response
    'missingResponseStatus' => 'The HTTP response does not contain a status code',
    'invalidStatusCode'     => '{0} is an invalid HTTP status code',
    'unknownStatusCode'     => 'Unknown HTTP status code with no status message passed: {0}',

    // URI
    'cannotParseURI'       => 'URI cannot be parsed: {0}',
    'segmentOutOfRange'    => 'URI segment of the request is out of the valid range: {0}',
    'invalidPort'          => 'Ports must be between 0 and 65535. Given: {0}',
    'malformedQueryString' => 'Query strings must not contain URI fragments.',

    // Page Not Found
    'pageNotFound'       => 'Page not found.',
    'emptyController'    => 'No controller specified.',
    'controllerNotFound' => 'The controller or its method could not be found: {0}::{1}',
    'methodNotFound'     => 'The controller method could not be found: {0}',
    'localeNotSupported' => 'Unsupported language: {0}',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'The requested action is not allowed.',

    // Uploaded file moving
    'alreadyMoved' => 'The uploaded file has already been moved.',
    'invalidFile'  => 'The original file is not a valid file.',
    'moveFailed'   => 'The file could not be moved from {0} to {1} ({2}).',

    'uploadErrOk'        => 'The file was successfully uploaded.',
    'uploadErrIniSize'   => 'The file "%s" exceeds the upload_max_filesize ini directive.',
    'uploadErrFormSize'  => 'The file "%s" is larger than the maximum allowed by the form.',
    'uploadErrPartial'   => 'The file "%s" was only partially uploaded.',
    'uploadErrNoFile'    => 'No file was uploaded.',
    'uploadErrCantWrite' => 'The file "%s" could not be written to disk.',
    'uploadErrNoTmpDir'  => 'Upload error: Missing temporary folder.',
    'uploadErrExtension' => 'The file upload was stopped by a PHP extension.',
    'uploadErrUnknown'   => 'The file "%s" could not be uploaded due to an unknown error.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'The SameSite setting can only be None, Lax, Strict, or an empty string. Given: {0}',

];
