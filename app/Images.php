<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    public $table = "images";

    protected $fillable = [
        'path'
    ];
    public function articles()
    {
        return $this->belongsToMany('App\Articles')
            ->withTimestamps();
    }
}
