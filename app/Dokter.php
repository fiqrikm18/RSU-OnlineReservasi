<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    public function poli() {
        return $this->belongsTo("poliklinik", "noPoli");
    }
}