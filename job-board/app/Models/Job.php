<?php

namespace App\Models;



class Job
{
    public static function all(): array
    {
        return [
            ['title' => 'Software Engineer', 'salary' => '$2100'],
            ['title' => 'Graphic desinge', 'salary' => '$1000']
        ];
    }
    //
}
