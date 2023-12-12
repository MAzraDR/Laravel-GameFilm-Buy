<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'Peminjaman';
    protected $fillable = [
        'email',
        'film_id',
        'borrowed_at',
        'due_date',
        'status'
    ];
}
