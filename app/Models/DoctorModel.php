<?php

namespace App\Models;
use App\Models\Role;
class Doctor extends BaseModel
{
    private string $userId;
    private string $specialization;
    private string $hospital;
    
    
    /**
     * @param string $userId
     * @param string $specialization
     * @param string $hospital
     * @param Role $role
     */
    public function __construct(string $userId, string $specialization,string $hospital)
    {
        parent::__construct();
        $this->userId = $userId;
        $this->specialization = $specialization;
        $this->hospital = $hospital;
      
        
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getSpecialization(): string
    {
        return $this->specialization;
    }

    public function getHospital(): string
    {
        return $this->hospital;
    }

   
}