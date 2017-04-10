<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    public $table = "subjects";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject'
    ];

}
