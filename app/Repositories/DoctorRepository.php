<?php

namespace App\Repositories;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class DoctorRepositories
{
    private string $tableName = "doctors";

    public function Insert(Doctor $doctor)
    {
        DB::insert(
            "insert into $this->tableName (id, userId)",
            [$doctor->getId(), $doctor->getUserId()]
        );
    }
   
    public function Update(Doctor $doctor)
    {
        DB::table($this->tableName)
            ->where('id', $doctor->getId())
            ->update([
                'userId' => $doctor->getUserId(),
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
}
