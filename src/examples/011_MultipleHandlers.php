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
 * Create some handlers
 */
$console = new \Monolog\Handler\StreamHandler('php://stderr', Logger::DEBUG);
$logger->pushHandler($console);

try {
    $stream = new \Monolog\Handler\StreamHandler(__DIR__ . '/../../logs/example.log', Logger::INFO);
    $logger->pushHandler($stream);
} catch (Exception $e) {
    // handle the case where the specified directory is not buildable or the stream is not a resource or string
}

$logger->debug('About to tick...');
$logger->info('Tick');

$logger->debug('About to tock...');
$logger->info('Tock');
