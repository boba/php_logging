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
$logger->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

/**
 * We can add message processors to the logger to get additional functionality
 *
 * IntrospectionProcessor adds line/file/class/method information to the logs
 */
$logger->pushProcessor(new \Monolog\Processor\IntrospectionProcessor());

$context = [ 'name' => 'world' ];

$logger->info('Hello, {name}!', $context);
