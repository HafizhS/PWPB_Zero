<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
	public $table = 'anime';

    protected $fillable = [
         'judul', 'episode', 'musim_rilis', 'tahun_rilis', 'studio', 'durasi', 'genre', 'score','image_url'
    ];
}