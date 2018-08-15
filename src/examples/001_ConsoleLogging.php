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

/**
 * Monolog is a PSR-3 compliant logging library which allows you to log to files, databases, and numerous other services.
 *
 *   Monolog: https://github.com/Seldaek/monolog
 *   PSR-3:   https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md
 */

/**
 * Create a Logger instance
 */
$logger = new Logger('default');

/**
 * Generate some log messages
 */
$logger->warning('This is a warning');
$logger->error('This is an error');
