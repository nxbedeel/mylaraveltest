<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'album_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','description'];
    
}
