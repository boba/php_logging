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
 * Create multiple log channels to differentiate areas of interest
 */
$logger = new Logger('default');
$securityLogger = new Logger('security');

$logger->info('Application started');

$securityLogger->info('Authenticating user');
$securityLogger->debug(new User('archer', 'GUEST'));
$securityLogger->info('User authenticated');

$logger->info('Checking phrasing...');
