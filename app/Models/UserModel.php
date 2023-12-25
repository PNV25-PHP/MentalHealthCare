<?php

namespace App\Models;

class UserModel extends BaseModel
{
    private Role $role;
    private string $email;
    private string $password;
    private string $firstname;
    private string $lastname;
    private string $address; 
    private string $phone;
    private string $url_image; 

    /**
     * @param Role $role
     * @param string $email
     * @param string $password
     * @param string $firstname
     * @param string $lastname
     * @param string $phone
     * @param string $address 
     * @param string $url_image 
     */
    public function __construct(
        Role $role,
        string $email,
        string $password,
        string $firstname = '',
        string $lastname = '',
        string $phone = '',
        string $address = '', 
        string $url_image = '' 
    ) {
        parent::__construct();
        $this->role = $role;
        $this->email = $email;
        $this->password = $password;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->address = $address;
        $this->url_image = $url_image;
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

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getUrlImage(): string
    {
        return $this->url_image;
    }

    public function setUrlImage(string $url_image): void
    {
        $this->url_image = $url_image;
    }
}
