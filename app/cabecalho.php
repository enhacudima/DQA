<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cabecalho extends Model
{
    use SoftDeletes;

    protected $table = 'cabecalhos';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    /**
     * Get the cabecalho that owns the user.
     */
    public function post()
    {
        return $this->belongsTo('App\User');
    }
}
