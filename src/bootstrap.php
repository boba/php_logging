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
use App\User;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Customize the log format
 */

// create a logger
$logger = new Logger('default');

$webProcessor = new \Monolog\Processor\WebProcessor();
$logger->pushProcessor($webProcessor);

// add username to log record (if available)
$logger->pushProcessor(
    function ($record) {
        if (isset($_SESSION['user'])) {
            $record['extra']['username'] = $_SESSION['user']->getUsername();
        } else {
            $record['extra']['username'] = 'anonymous';
        }
        return $record;
    }
);

// customize the log format
$output = "[%datetime%] [%channel%] %level_name%: [%extra.username%] %message% %context% %extra%\n";
$dateFormat = "Y-m-d H:i:s";
$formatter = new \Monolog\Formatter\LineFormatter($output, $dateFormat);

// create a stream to a log file
try {
    $stream = new \Monolog\Handler\StreamHandler(__DIR__ . '/../logs/app.log', Logger::DEBUG);
    $stream->setFormatter($formatter);

    // add the stream to the log
    $logger->pushHandler($stream);
} catch (Exception $e) {
    // handle the case where the specified directory is not buildable or the stream is not a resource or string
}

session_start();

$logger->debug('bootstrap complete');
