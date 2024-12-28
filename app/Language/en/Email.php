<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
    'email'                   => 'E-Mail',
    'subject'                 => 'Subject',
    'cc'                      => 'CC',
    'bcc'                     => 'BCC',
    'mustBeArray'             => 'The email validation method must be passed an array.',
    'invalidAddress'          => 'Invalid email address: {0}',
    'attachmentMissing'       => 'The following email attachment could not be found: {0}',
    'attachmentUnreadable'    => 'Unable to open attachment: {0}',
    'noFrom'                  => 'Cannot send mail without a "From" header.',
    'noRecipients'            => 'No recipients set. You must include a To, Cc, or Bcc.',
    'sendFailurePHPMail'      => 'Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.',
    'sendFailureSendmail'     => 'Unable to send email using PHP Sendmail. Your server might not be configured to send mail using this method.',
    'sendFailureSmtp'         => 'Unable to send email using PHP SMTP. Your server might not be configured to send mail using this method.',
    'sent'                    => 'Your message has been successfully sent using the following protocol: {0}',
    'noSocket'                => 'Unable to open a socket to Sendmail. Please check settings.',
    'noHostname'              => 'SMTP hostname is not set.',
    'SMTPError'               => 'The following SMTP error was encountered: {0}',
    'noSMTPAuth'              => 'Error: You must assign an SMTP username and password.',
    'failedSMTPLogin'         => 'Failed to send AUTH LOGIN command. Error: {0}',
    'SMTPAuthUsername'        => 'Failed to authenticate username. Error: {0}',
    'SMTPAuthPassword'        => 'Failed to authenticate password. Error: {0}',
    'SMTPDataFailure'         => 'Unable to send data: {0}',
    'exitStatus'              => 'Exit status code: {0}',

];
