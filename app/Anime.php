<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
	public $table = 'anime';
	
    protected $fillable = [
        'judul', 'episode', 'musim_rilis', 'tanggal_tayang', 'studio', 'durasi', 'genre', 'score', 'credit'
    ];
}