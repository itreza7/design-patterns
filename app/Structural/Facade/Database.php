<?php

namespace App\Structural\Facade;

class Database
{
    public function get_data($id): array
    {
        return [
            'id' => $id,
        ];
    }
}