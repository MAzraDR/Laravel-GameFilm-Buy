<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table = 'Peminjaman';
    protected $fillable = [
        'email',
        'game_id',
        'borrowed_at',
        'due_date',
        'status'
    ];
}
