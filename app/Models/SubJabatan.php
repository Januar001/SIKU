<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubJabatan extends Model
{
    use HasFactory;

    protected $table = "sub_jabatan";

    protected $guarded = [];

    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
    public function Pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
