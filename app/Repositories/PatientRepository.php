<?php

namespace App\Repositories;

use App\Models\Patient;
use Illuminate\Support\Facades\DB;

class PatientRepository
{
    private string $tableName = "patients";

    public function Insert(Patient $patient)
    {
        DB::insert(
            "insert into $this->tableName (id, userId)",
            [$patient->getId(), $patient->getUserId()]
        );
    }

    public function Update(Patient $patient)
    {
        // TODO: Implement Update() method.
    }

    public function Delete(string $id)
    {
        // TODO: Implement Delete() method.
    }

    public function SelectOneById(string $id)
    {
        // TODO: Implement SelectOneById() method.
    }

    public function SelectOneByIdWithRelationship(string $id, array $relationships)
    {
        // TODO: Implement SelectOneByIdWithRelationship() method.
    }

    public function SelectManyWithRelationship(string $id, array $test)
    {
        // TODO: Implement SelectManyWithRelationship() method.
    }

}
