<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Subjects extends Model
{
<<<<<<< HEAD
    public $table = "subjects";
=======
//    use SoftDeletes;
    public $table = "subjects";

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

>>>>>>> a7e86787c4c95b5e18b413b96befe87d20fe13d8
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject'
    ];

}
