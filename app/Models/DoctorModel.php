<?php

namespace App\Models;
use App\Models\Role;
class Doctor extends BaseModel
{
    private string $userId;
    private string $specialty;
    private string $hospital;
    
    
    /**
     * @param string $userId
     * @param string $specialty
     * @param string $hospital
     * @param Role $role
     */
    public function __construct(string $userId, string $specialty,string $hospital)
    {
        parent::__construct();
        $this->userId = $userId;
        $this->specialty = $specialty;
        $this->hospital = $hospital;
      
        
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getSpecialty(): string
    {
        return $this->specialty;
    }

    public function getHospital(): string
    {
        return $this->hospital;
    }

   
}