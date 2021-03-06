<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = \App\Store::all(); //busca todas as lojas

        foreach ($stores as $store) {
            $store->products()->save(factory(\App\Product::class)->make());
            //para cada loja ria produtos products() está definido no models de store
            //a  factory do Product está criada
        }
    }
}
