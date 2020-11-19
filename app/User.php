<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable; //simplifica  envio de notificações para o usuário

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [            //campos q podem ser manipulados
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [     //qdo faz uma busca na collection users, esconde os campos q estao declarados aqui...
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [    //sempre q manipular o campo q estiver aqui embaixo ele altera o tipo dele para o tipo em cast
        'email_verified_at' => 'datetime',
    ];

    public function store(){ //mapeamento 1:1 de usuário para loja'
        return $this->hasOne(Store::class);
    }

}
