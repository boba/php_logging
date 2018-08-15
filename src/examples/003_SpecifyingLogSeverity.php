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
use Monolog\Handler\ErrorLogHandler;

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Configure the log only show entries that are severity ERROR or worse
 */
$logger = new Logger('default');
$logger->pushHandler(new ErrorLogHandler(ErrorLogHandler::OPERATING_SYSTEM, Logger::ERROR));

/**
 * PSR-3 defines LoggerInterface, which includes a function for each log severity
 */
$logger->debug('This is a DEBUG message');
$logger->info('This is a INFO message');
$logger->notice('This is a NOTICE message');
$logger->warning('This is a WARNING message');
$logger->error('This is a ERROR message');
$logger->critical('This is a CRITICAL message');
$logger->alert('This is a ALERT message');
$logger->emergency('This is a EMERGENCY message');
