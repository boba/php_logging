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
 * PSR-3 defines LoggerInterface, which also defines a generic function for arbitrary levels
 */
$logger->log(Logger::DEBUG, 'This is a DEBUG message');
$logger->log(Logger::INFO, 'This is a INFO message');
$logger->log(Logger::NOTICE, 'This is a NOTICE message');
$logger->log(Logger::WARNING, 'This is a WARNING message');
$logger->log(Logger::ERROR, 'This is a ERROR message');
$logger->log(Logger::CRITICAL, 'This is a CRITICAL message');
$logger->log(Logger::ALERT, 'This is a ALERT message');
$logger->log(Logger::EMERGENCY, 'This is a EMERGENCY message');
