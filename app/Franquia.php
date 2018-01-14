<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franquia extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'provincia', 'distrito', 'user_id',
    ];
}
