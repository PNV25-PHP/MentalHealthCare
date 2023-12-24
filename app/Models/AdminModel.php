<?php

namespace App\Models;

class Admin extends BaseModel
{
    private string $userId;

    /**
     * @param string $userId
     */
    public function __construct(string $userId)
    {
        parent::__construct();
        $this->userId = $userId;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }
}
