<?php

// app/Models/KodePokja.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KodePokja extends Model
{
    protected $fillable = [
        'kd_pokja', 'keterangan',
    ];

    public function pokja()
    {
        return $this->hasMany(Pokja::class, 'kd_pokja', 'kd_pokja');
    }
}
