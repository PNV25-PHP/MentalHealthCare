<?php

namespace App\Repositories;

use App\Models\UserModel;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    private string $tableName = "users";

    public function Insert(UserModel $user)
    {
        DB::insert(
            "insert into $this->tableName (id, role, email, password)",
            [$user->getId(), $user->getRole()->getValue(), $user->getEmail(), $user->getPassword()]
        );
    }

    public function Update(UserModel $model)
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
