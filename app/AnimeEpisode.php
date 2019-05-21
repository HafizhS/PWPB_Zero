<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimeEpisode extends Model
{
    public $table = 'anime_episode';

    protected $fillable = [
        'id_anime','episode ','url'
    ];
}
