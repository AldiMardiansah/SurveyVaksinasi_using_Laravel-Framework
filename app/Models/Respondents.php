<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respondents extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'address',
        'gender',
        'age',
        'status',
        'doses',
        'vaccine',
        'effects',
        'medical_history',
        'importance',
        'info_sufficiency',
        'service_rate',
    ];

    public static function getValidGenders()
    {
        return [
            'Laki-laki' => 'Laki-laki',
            'Perempuan' => 'Perempuan',
        ];
    }

    public static function getValidStatuses()
    {
        return [
            'sudah vaksin' => 'Sudah divaksin',
            'belum vaksin' => 'Belum divaksin',
        ];
    }

    public static function getValidDoses() //jumlah vaksinasi
    {
        return ['1', '2', '3', '4', '5'];
    }

    public static function getValidVaccines() //jenis yang divaksin
    {
        return [
            'Sinovac',
            'AstraZeneca',
            'Moderna',
            'Pfizer-BioNTech',
            'Sinopharm',
        ];
    }

    public static function getValidImportance() //skala pentingnya vaksin
    {
        return [
        '1' => 'Tidak penting',
        '2' => '',
        '3' => '',
        '4' => '',
        '5' => 'Sangat penting'
    ];
    }

    public static function getValidInfo() //informasi kelengkapan vaksin
    {
        return [
        '1' => 'Tidak lengkap',
        '2' => '',
        '3' => '',
        '4' => '',
        '5' => 'Sangat lengkap'
    ];
    }

    public static function getValidRatings() //rate pelayanan yg diberikan
    {
        return [
        '1' => 'Sangat buruk',
        '2' => '',
        '3' => '',
        '4' => '',
        '5' => 'Sangat baik'
    ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}
