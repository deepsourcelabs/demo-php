<?php

declare(strict_types=1);

namespace App;

class User
{
    public string $name = 'John Doe';

    public function encryptPassword(string $password): string
    {
        return md5($password);
    }
}
