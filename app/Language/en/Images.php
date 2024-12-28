<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Images language settings
return [
    'sourceImageRequired'    => 'A source image must be specified in the settings.',
    'gdRequired'             => 'The GD image library is required to use this function.',
    'gdRequiredForProps'     => 'The server must support the GD image library to determine image properties.',
    'gifNotSupported'        => 'GIF images are often not supported due to licensing restrictions. You may need to use JPG or PNG images instead.',
    'jpgNotSupported'        => 'JPG images are not supported.',
    'pngNotSupported'        => 'PNG images are not supported.',
    'webpNotSupported'       => 'WEBP images are not supported.',
    'fileNotSupported'       => 'The file contains an unsupported image format.',
    'unsupportedImageCreate' => 'The server does not support the GD function required to process this type of image.',
    'jpgOrPngRequired'       => 'The image resize protocol specified in the settings works only with JPEG or PNG image types.',
    'rotateUnsupported'      => 'Image rotation does not appear to be supported by the server.',
    'libPathInvalid'         => 'The path to your image library is incorrect. Please set the correct path in the image settings. {0}',
    'imageProcessFailed'     => 'Image processing failed. Please check if the server supports the chosen protocol and if the image library path is correct.',
    'rotationAngleRequired'  => 'A rotation angle is required for image rotation.',
    'invalidPath'            => 'The path to the image is incorrect.',
    'copyFailed'             => 'The image copy function failed.',
    'missingFont'            => 'No font could be found to use.',
    'saveFailed'             => 'The image could not be saved. Please ensure that the image and file directory are writable.',
    'invalidDirection'       => 'The reverse direction can only be `vertical` or `horizontal`. Given: {0}',
    'exifNotSupported'       => 'Reading EXIF data is not supported by this PHP installation.',

];
