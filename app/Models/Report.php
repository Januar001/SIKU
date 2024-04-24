<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;

    protected $table = 'report';

    protected $guarded = [];

    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
