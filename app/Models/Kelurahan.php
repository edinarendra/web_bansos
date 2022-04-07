<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = 'kelurahan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'kode_pos', 'ketua_lingkungan'
    ];
}
