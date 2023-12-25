<?php

namespace App\Repositories;

use App\Models\PatientModel;
use Illuminate\Support\Facades\DB;


class PatientRepository 
{
    private string $tableName = "patients";

    public function Insert(PatientModel $patient)
    {
        DB::insert(
            "insert into $this->tableName (id, userId)",
            [$patient->getId(), $patient->getId()]
        );
    }

    public function Update(PatientModel $patient)
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

    public function findByEmail($email)
    {
        return DB::table($this->tableName)->where('email', $email)->first();
    }
}
