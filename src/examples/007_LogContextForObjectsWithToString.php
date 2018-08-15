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

$logger = new Logger('default');

$user = new User('darkhelmet', '12345'); // That's the kinda thing an idiot would have on his luggage!

$logger->info('User');
$logger->info($user);
