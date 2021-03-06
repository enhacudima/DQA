<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cabecalho extends Model
{
    use SoftDeletes;

    protected $table = 'cabecalhos';

    protected $fillable = [
        'transacao', 'franquia_id', 'data_dqa', 'data_inicio', 'data_fim', 'user_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    /**
     * Get the cabecalho that owns the user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
