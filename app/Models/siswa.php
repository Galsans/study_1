<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'no_telp',
        'id_kelas',
    ];

    public function setCatAttribute($value)
    {
        $this->attributes['id_kelas'] = json_encode($value);
    }

    /**
     * Get the categories
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['id_kelas'] = json_decode($value);
    }
}
