<?php
/**
 * PHP version 7
 *
 * Logger Example
 *
 * @category Application
 * @package  App
 * @author   Bob Anderson <25436+boba@users.noreply.github.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 * @link     https://github.com/boba/php_logging PHP Logging with Monolog
 */

use Monolog\Logger;

require_once __DIR__ . '/../../vendor/autoload.php';

$logger = new Logger('default');

/**
 * Monolog supports all the logging levels defined by RFC 5424 (https://tools.ietf.org/html/rfc5424)
 */
$logger->debug('This is a DEBUG message');
$logger->info('This is a INFO message');
$logger->notice('This is a NOTICE message');
$logger->warning('This is a WARNING message');
$logger->error('This is a ERROR message');
$logger->critical('This is a CRITICAL message');
$logger->alert('This is a ALERT message');
$logger->emergency('This is a EMERGENCY message');
