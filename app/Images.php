<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','size','title','url','status','album_id','user_id','thumb_url'];
}
