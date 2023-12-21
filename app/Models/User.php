<?php

namespace App\Models;

class User extends BaseModel
{
    private Role $role;
    private string $email;
    private string $password;

    /**
     * @param Role $role
     * @param string $email
     * @param string $password
     */
    public function __construct(Role $role, string $email, string $password)
    {
        parent::__construct();
        $this->role = $role;
        $this->email = $email;
        $this->password = $password;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}
