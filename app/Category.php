<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [            //campos q podem ser manipulados
        'name', 'description', 'slug',
    ]; 

    public function products() { //por padrao num relacionamento N:N o laravel procura uma tabela
        //nomeada com os models em ordem alfabetica no plural. por ex neste caso: 
        //categories_products. se quisesse colocar outro name é só passar o segundo 
        //parâmetro com o nome da tabela
        return $this>belongsToMany(Product::class); //relacionamento N:N produto > categoria
    }
}
