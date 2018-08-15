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

$config = [
    'smtp_server' => 'localhost',
    'smtp_port' => 25,
    'send_from' => 'system@example.com',
    'send_to' => 'notify@example.com',
    'subject' => 'Example Notification Test'
];

// configure mail settings
ini_set('SMTP', $config['smtp_server']);
ini_set('smtp_port', $config['smtp_port']);
ini_set('sendmail_from', $config['send_from']);

// create a handler to send email messages
$handler = new \Monolog\Handler\NativeMailerHandler($config['send_to'], $config['subject'], $config['send_from'], Logger::EMERGENCY);

$emailLogger = new Logger('email');
$emailLogger->pushHandler($handler);

$logger->emergency('Something happened so I\'m going to send an email');
$emailLogger->emergency('Demonstrating PHP error logging to email');
$logger->emergency('Email sent');
