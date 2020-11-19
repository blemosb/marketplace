<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model //por convençao o laravel procura no db uma tabela com o nome dessa classe em minusculo e no
                          // plural. Aqui por exemplo procurará stores
{

    protected $fillable = [            //campos q podem ser manipulados
        'name', 'description', 'phone', 'mobile_phone', 'slug' 
    ];

    public function user(){ //mapeamento 1:1 de loja para usuario'
        return $this->belongsTo(User::class);
    }

    public function products(){ //mapeamento 1:N - uma loja tem varios produtos'
        return $this->hasMany(Product::class);
    }

}
