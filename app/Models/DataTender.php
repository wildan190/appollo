<?php

// app/Models/DataTender.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataTender extends Model
{
    protected $fillable = [
        'nama_personil', 'jabatan', 'nik', 'npwp', 'kd_tender', 'nama_paket', 'kd_pokja', 'pagu', 'hps', 'satuan_kerja', 'ppk', 'nama_instansi', 'nilai_penawaran', 'tanggal_penetapan', 'nilai_kontrak', 'tanggal_kontrak', 'waktu_pelaksanaan', 'tahun',
    ];

    public function pokja()
    {
        return $this->belongsTo(Pokja::class, 'kd_pokja', 'kd_pokja');
    }

    public function kodePokja()
    {
        return $this->belongsTo(KodePokja::class, 'kd_pokja', 'kd_pokja');
    }

    public function dataPersonil()
    {
        return $this->hasMany(DataPersonil::class, 'kd_tender', 'kd_tender');
    }
}
