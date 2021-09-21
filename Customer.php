<?php

class Customer
{
    public $name;
    public $email;
    public $role;

    function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    public function isAdmin()
    {
        return $this->role == 1;
    }

    public function getRoleName()
    {
        if ($this->isAdmin()) {
            return 'Admin';
        }
        else {
            return 'User';
        }
    }
}