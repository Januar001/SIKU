<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPegawai extends Model
{
    use HasFactory;

    protected $table = "status_pegawai";

    protected $guarded = [];

    public function Pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
