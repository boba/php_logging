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

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Customize the log format
 */
$output = "[%datetime%] [%channel%] %level_name%: %message% %context% %extra%\n";
$dateFormat = "Y-m-d H:i:s";
$formatter = new \Monolog\Formatter\LineFormatter($output, $dateFormat);

$logger = new Logger('default');

$stream = new \Monolog\Handler\StreamHandler(__DIR__ . '/../../logs/example.log', Logger::INFO);
$stream->setFormatter($formatter);
$logger->pushHandler($stream);

$logger->info('Custom log format...');
