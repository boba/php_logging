<?php
/**
 * PHP version 7
 *
 * CustomFormatRotatingFileHandler - StreamHandler with custom log formatting
 *
 * @category Logging
 * @package  App\Log
 * @author   Bob Anderson <25436+boba@users.noreply.github.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 * @link     https://github.com/boba/php_logging PHP Logging with Monolog
 */

namespace App\Log;

use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;

/**
 * CustomFormatRotatingFileHandler
 *
 * @category Logging
 * @package  App\Log
 * @author   Bob Anderson <25436+boba@users.noreply.github.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 * @link     https://github.com/boba/php_logging PHP Logging witih Monolog
 */
class CustomFormatRotatingFileHandler extends RotatingFileHandler
{
    /**
     * CustomFormatStreamHandler constructor.
     *
     * @param string   $filename       Log file name
     * @param int      $maxFiles       The maximal amount of files to keep (0 means unlimited)
     * @param int      $level          The minimum logging level at which this handler will be triggered
     * @param Boolean  $bubble         Whether the messages that are handled can bubble up the stack or not
     * @param int|null $filePermission Optional file permissions (default (0644) are only for owner read/write)
     * @param Boolean  $useLocking     Try to lock log file before doing any writes
     *
     * @throws \Exception
     */
    public function __construct($filename, $maxFiles = 0, int $level = Logger::DEBUG, bool $bubble = true, ?int $filePermission = null, bool $useLocking = false)
    {
        parent::__construct($filename, $maxFiles, $level, $bubble, $filePermission, $useLocking);

        // customize the log format
        $output = "[%datetime%] [%channel%] %level_name%: [%extra.username%] %message% %context% %extra%\n";
        $dateFormat = "Y-m-d H:i:s A";
        $formatter = new \Monolog\Formatter\LineFormatter($output, $dateFormat);

        $this->setFormatter($formatter);
    }
}
