<?php

namespace App\Models;

use App\Models\Pegawai;
use App\Models\SubJabatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = "jabatan";

    protected $guarded = [];

    public function SubJabatan()
    {
        return $this->hasMany(SubJabatan::class);
    }
}
