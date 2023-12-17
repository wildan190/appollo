<?php

// app/Models/DataPersonil.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPersonil extends Model
{
    protected $fillable = [
        'nama_personil1', 'jabatan1', 'nik1', 'npwp1', 'kd_tender', 'nama_paket',
        'kd_pokja',
        'pagu',
        'hps',
        'satuan_kerja',
        'ppk',
        'nama_instansi',
        'nilai_penawaran',
        'tanggal_penetapan',
        'nilai_kontrak',
        'tanggal_kontrak',
        'waktu_pelaksanaan',
        'tahun',
    ];

    public function dataTender()
    {
        return $this->belongsTo(DataTender::class, 'kd_tender', 'kd_tender');
    }

    public function pokja()
    {
        return $this->belongsTo(Pokja::class, 'kd_pokja', 'kd_pokja');
    }
}
