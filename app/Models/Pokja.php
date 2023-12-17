<?php

// app/Models/Pokja.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokja extends Model
{
    protected $fillable = [
        'pokja_id', 'nama_pokja', 'nip', 'jabatan_pokja', 'golongan', 'telepon', 'email',
    ];

    public function dataTender()
    {
        return $this->hasMany(DataTender::class, 'kd_pokja', 'kd_pokja');
    }

    public function dataPersonil()
    {
        return $this->hasMany(DataPersonil::class, 'kd_pokja', 'kd_pokja');
    }
}
