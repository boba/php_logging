<?php
/**
 * PHP version 7
 *
 * UserSessionProcessor - Add session details to log records
 *
 * @category Logging
 * @package  App\Log
 * @author   Bob Anderson <25436+boba@users.noreply.github.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 * @link     https://github.com/boba/php_logging PHP Logging with Monolog
 */

namespace App\Log;

/**
 * UserSessionProcessor
 *
 * @category Logging
 * @package  App\Log
 * @author   Bob Anderson <25436+boba@users.noreply.github.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 * @link     https://github.com/boba/php_logging PHP Logging witih Monolog
 */
class UserSessionProcessor
{
    /**
     * Add session details to log records
     *
     * @param array $record Log record
     *
     * @return array
     */
    public function __invoke(array $record)
    {
        if (isset($_SESSION['user'])) {
            $record['extra']['username'] = $_SESSION['user']->getUsername();
        } else {
            $record['extra']['username'] = 'anonymous';
        }
        return $record;
    }
}
