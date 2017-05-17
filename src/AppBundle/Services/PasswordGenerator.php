<?php

namespace AppBundle\Services;

/**
 * Generator hasel dla duzy, malych liter i cyfr
 *
 * Class PasswordGenerator
 * @package AppBundle\Services
 */
class PasswordGenerator
{
    /**
     * Długość hasła
     *
     * @var int
     */
    private $length;

    private $password;

    /**
     * PasswordGenerator constructor.
     * @param int $length
     */
    public function __construct($length = 12)
    {
        $this->length = $length;
    }

    public function getPassword()
    {
        if (empty($this->password)) {
            throw new \Exception('Wygeneruj haslo.');
        }
        return $this->password;
    }

    /**
     * Generuje haslo
     *
     * @return $this
     */
    public function generate()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $this->password = substr(str_shuffle($chars), 0, $this->length);

        return $this;
    }
}