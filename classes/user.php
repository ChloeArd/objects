<?php

class User {
    private $username;
    private $password;

    /**
     * User constructor.
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password) {
        $this->setUsername($username);
        $this->setPassword($password);
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

}