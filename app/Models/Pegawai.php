<?php

namespace App\Models;

use App\Models\Jabatan;
use App\Models\Pendidikan;
use App\Models\StatusPegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $guarded = [];

    public function Statuspegawai()
    {
        return $this->belongsTo(StatusPegawai::class, 'status_pegawai_id');
    }

    public function SubJabatan()
    {
        return $this->belongsTo(SubJabatan::class, 'sub_jabatan_id');
    }

    public function Pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'pendidikan_id');
    }
}
