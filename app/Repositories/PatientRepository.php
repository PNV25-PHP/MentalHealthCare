<?php

namespace App\Repositories;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;


class PatientRepository
{
    private string $tableName = "patients";

    public function Insert(Patient $patient)
    {
        DB::insert(
            "insert into $this->tableName (id, userId)",
            [$patient->getId(), $patient->getId()]
        );
    }

    public function Update(Patient $patient)
    {
        DB::table($this->tableName)
            ->where('id', $patient->getId())
            ->update([
                'userId' => $patient->getId(),
            ]);
    }

    public function Delete(string $id)
    {
        DB::table($this->tableName)->where('id', $id)->delete();
    }

    public function SelectOneById(string $id)
    {
        return DB::table($this->tableName)->where('id', $id)->first();
    }

    public function SelectOneByIdWithRelationship(string $id, array $relationships)
    {
       // return Patient::with($relationships)->find($id);
    }

    public function SelectManyWithRelationship(string $id, array $test)
    {
        // TODO: Implement SelectManyWithRelationship() method.
    }


    
}
