<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KasMasuk extends Model
{
    protected $fillable = ['nis', 'nama', 'waktu', 'status', 'jumlah'];
}
