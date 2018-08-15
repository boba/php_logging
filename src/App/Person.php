<?php
/**
 * PHP version 7
 *
 * Person Class
 *
 * @category Application
 * @package  App
 * @author   CU*Answers <imaging@cuanswers.com>
 * @license  https://cuanswers.com Commercial
 * @link     https://cuanswers.com CU*Answers
 */

namespace App;

/**
 * Person
 *
 * @category App
 * @package  App
 * @author   Bob Anderson <25436+boba@users.noreply.github.com>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 * @link     https://github.com/boba/php_logging PHP Logging with Monolog
 */
class Person
{
    private $_firstname;
    private $_lastname;

    /**
     * User constructor.
     *
     * @param string $first First Name
     * @param string $last  Last Name
     */
    public function __construct($first, $last)
    {
        $this->_firstname = $first;
        $this->_lastname = $last;
    }

    /**
     * Get first name
     *
     * @return string First name
     */
    public function getFirstname()
    {
        return $this->_firstname;
    }

    /**
     * Set first name
     *
     * @param string $_firstname First name
     *
     * @return void
     */
    public function setFirstname($_firstname): void
    {
        $this->_firstname = $_firstname;
    }

    /**
     * Get last name
     *
     * @return string Last name
     */
    public function getLastname()
    {
        return $this->_lastname;
    }

    /**
     * Set last name
     *
     * @param string $_lastname Last name
     *
     * @return void
     */
    public function setLastname($_lastname): void
    {
        $this->_lastname = $_lastname;
    }

    /**
     * Override __toString() to display full name
     *
     * @return string Full name
     */
    public function __toString()
    {
        return $this->_firstname . ' ' . $this->_lastname;
    }
}
