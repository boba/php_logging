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
use App\Person;

require_once __DIR__ . '/../../vendor/autoload.php';

$logger = new Logger('default');

$person = new Person('Abraham', 'Lincoln');

$logger->info('Person');
$logger->info($person);
