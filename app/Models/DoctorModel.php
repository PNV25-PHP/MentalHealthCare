<?php

namespace App\Models;
use App\Models\Role;
class DoctorModel extends BaseModel
{
    private string $Id;
    private string $specialization;
    private string $hospital;
    
    
    /**
     * @param string $Id
     * @param string $specialization
     * @param string $hospital
     * @param Role $role
     */
    public function __construct(string $Id, string $specialization,string $hospital)
    {
        parent::__construct();
        $this->Id = $Id;
        $this->specialization = $specialization;
        $this->hospital = $hospital;
      
        
    }

    public function getId(): string
    {
        return $this->Id;
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