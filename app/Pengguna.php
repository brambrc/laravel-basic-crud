<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'email', 'alamat', 'no_hp', 'jenis_kelamin'];
}
