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
use Monolog\Processor\WebProcessor;
use App\Log\UserSessionProcessor;
use App\Log\CustomFormatRotatingFileHandler;

require_once __DIR__ . '/../vendor/autoload.php';

// create a logger
$logger = new Logger('default');

// add web request info to log record
$logger->pushProcessor(new WebProcessor());

// add user session to log record
$logger->pushProcessor(new UserSessionProcessor());

try {
    // create a stream to a log file with a customer format for this application
    $logger->pushHandler(new CustomFormatRotatingFileHandler(__DIR__ . '/../logs/app.log',  2, Logger::DEBUG));
} catch (Exception $e) {
    // handle the case where the specified directory is not buildable or the stream is not a resource or string
}

session_start();

$logger->debug('bootstrap complete');
