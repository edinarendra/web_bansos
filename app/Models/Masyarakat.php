<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;
    protected $table = 'masyarakat';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'alamat', 'no_hp', 'nik'
    ];
}
