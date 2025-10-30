<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $table = 'kota';

    protected $fillable = [
        'propinsi_id',
        'nama_kota',
    ];

    /**
     * Relationship: Kota belongs to Provinsi.
     * Method name kept as getProvinsi to match existing controller calls.
     */
    public function getProvinsi()
    {
        return $this->belongsTo(Provinsi::class, 'propinsi_id');
    }
}
