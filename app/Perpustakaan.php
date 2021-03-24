<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    protected $table = "perpustakaans";

    protected $fillable = [
        'nama_perpustakaan'
    ];

    public function bukus()
    {
        return $this->belongsToMany(Buku::class);
    }
}
