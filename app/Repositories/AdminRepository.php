<?php
namespace App\Repositories;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class AdminRepository
{
    private string $tableName = "admins";

    public function Insert(Admin $admin)
    {
        DB::insert(
            "insert into $this->tableName (id, userId)",
            [$admin->getId(), $admin->getUserId()]
        );
    }

    public function Update(Admin $admin)
    {
        DB::table($this->tableName)
            ->where('id', $admin->getId())
            ->update([
                'userId' => $admin->getUserId(),
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

}
