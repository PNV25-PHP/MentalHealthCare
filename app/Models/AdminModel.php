<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends BaseModel
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
