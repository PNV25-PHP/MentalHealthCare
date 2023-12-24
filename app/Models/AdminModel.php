<?php

namespace App\Models;

class Admin extends BaseModel
{
    private string $Id;

    /**
     * @param string $userId
     */
    public function __construct(string $Id)
    {
        parent::__construct();
        $this->Id = $Id;
    }

    public function getId(): string
    {
        return $this->Id;
    }
}
