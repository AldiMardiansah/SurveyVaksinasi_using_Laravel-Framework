<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respondents extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'address',
        'status'
    ];

    public static function getValidGenders()
    {
        return [
            'Laki-laki' => 'Laki-laki',
            'Perempuan' => 'Perempuan',
        ];
    }
}
