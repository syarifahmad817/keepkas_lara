<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bendahara extends Model
{
    protected $fillable = ['admin_id', 'nama', 'email', 'nis', 'kelas'];
}
