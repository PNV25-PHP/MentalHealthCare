<?php

namespace App\Repositories;

use App\Models\AdminModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class AdminRepository
{
    private string $tableName = "admins";

    public function Insert(AdminModel $admin)
    {
        DB::insert(
            "insert into $this->tableName (id, userId)",
            [$admin->getId(), $admin->getId()]
        );
    }

    public function Update(AdminModel $admin)
    {
        DB::table($this->tableName)
            ->where('id', $admin->getId())
            ->update([
                'userId' => $admin->getId(),
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
        //   return Admin::with($relationships)->find($id);
        //  return Admin::with($relationships)->where('id', $id)->first();
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
