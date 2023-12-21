<?php

namespace App\Models;

abstract class BaseModel
{
    protected string $id;

    public function __construct()
    {
        $this->id = "ID" . time();
    }

    public function getId(): string
    {
        return $this->id;
    }
}
