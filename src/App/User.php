<?php
/**
 * PHP version 7
 *
 * User Clas
 *
 * @category Application
 * @package  App
 * @author   CU*Answers <imaging@cuanswers.com>
 * @license  https://cuanswers.com Commercial
 * @link     https://cuanswers.com CU*Answers
 */

namespace App;

/**
 * User
 *
 * @category App
 * @package  App
 * @author   Bob Anderson <25436+boba@users.noreply.github.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 * @link     https://github.com/boba/php_logging PHP Logging with Monolog
 */
class User
{
    private $_username;
    private $_password;

    /**
     * User constructor.
     *
     * @param string $username Username
     * @param string $password Password
     */
    public function __construct($username, $password)
    {
        $this->_username = $username;
        $this->_password = $password;
    }

    /**
     * Get user username
     *
     * @return string Username
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * Set user username
     *
     * @param string $_username Username
     *
     * @return void
     */
    public function setUsername($_username): void
    {
        $this->_username = $_username;
    }

    /**
     * Set user password
     *
     * @param string $_password Password
     *
     * @return void
     */
    public function setPassword($_password): void
    {
        $this->_password = $_password;
    }

    /**
     * Override __toString() to mask password
     *
     * @return string
     */
    public function __toString()
    {
        return 'username = \'' . $this->_username . '\', password = \'' . str_repeat('*', strlen($this->_password)) . '\'';
    }
}
