<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
   protected $table = 'anak';
   protected $fillable = ['nama', 'jenis_kelamin', 'nik', 'alamat', 'tinggi', 'berat', 'lingkar_kepala', 'tanggal'];
}
