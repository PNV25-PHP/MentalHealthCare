<?php

namespace App\Models;

class Patient extends BaseModel
{
    private string $Id;

    /**
     * @param string $Id
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
