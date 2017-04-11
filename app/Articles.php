<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articles extends Model
{
    use SoftDeletes;
    public $table = "articles";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','article','subject_id','writer','archived','created_at' 
    ];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at','created_at'];

    public function scopeArchive($query,$id)
    {
        $query->where('subject_id','=',$id)
                ->update(['archived' => 1]);
    }

    public function images()
    {
        return $this->belongsToMany('App\Images')
            ->withTimestamps();
    }
}
