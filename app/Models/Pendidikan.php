<?php

namespace App\Models;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = "pendidikan";

    protected $guarded = [];

    public function Pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
