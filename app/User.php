<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\meuResetDeSenha;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','grupo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the cabecalho for the user post.
     */
    public function cabecalho()
    {
        return $this->hasMany('App\cabecalho');
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new meuResetDeSenha($token));
    }
}
