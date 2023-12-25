<?php

namespace App\Repositories;

use App\Models\DoctorModel;
use Illuminate\Support\Facades\DB;

class DoctorRepository
{
    private string $tableName = "doctors";

    public function Insert(DoctorModel $doctor)
    {
        DB::insert(
            "insert into $this->tableName (id, userId)",
            [$doctor->getId(), $doctor->getId()]
        );
    }

    public function Update(DoctorModel $doctor)
    {
        DB::table($this->tableName)
            ->where('id', $doctor->getId())
            ->update([
                'userId' => $doctor->getId(),
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
        //  return Doctor::with($relationships)->find($id);
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
