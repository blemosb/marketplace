<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $HelloWord = 'Tudo bem';
    return view('welcome', ['hello' => $HelloWord]);
});

Route::get('/model', function () {
   // $products = \App\Product::all();  //=select * from products. Procura os models do projeto e com o nome do Model em
                                      // minusculo no plural
 /*   $user = new \App\User();
    $user->name = 'Teste';
    $user->email = 'teste@teste.com';
    $user->password = bcrypt('12345678');
    $user->save();
    return \App\User::all(); //select * from users


    $user = \App\User::find(4);
    return $user->store; //store esta mapeado em user. assim vem o objeto unico
                        //se chamar store() vem resultado da instância
 */
/*
 //cria uma loja para 1 usuario
    $user=\App\User::find(25);
    $store = $user->store()->create([ //create sempre recebe com o id do bd
                                    //aqui o usuario criado cria uma loja pelo metodo stores que
                                    //tem em user
        'name'=> 'Loja teste',
        'description'=> 'Loja teste',
        'phone'=> '7867554',
        'mobile_phone'=> '897867564',
        'slug'=> 'loja-teste',
    ]);

    dd($store);
*/
 /*   //cria um produto para uma loja
    $store=\App\Store::find(41);
    $product = $store->products()->create([
        'name' => 'Notebook',
        'description' => '10gb',
        'body' => 'qualquer coisa',
        'price' => 2999,99, //duas casas decimais, min 1 max 10
        'slug' => 'notebook-dell',
    ]);
    dd($product);
*/
  /*  //Criar uma categoria
    \App\Category::create([
        'name' => 'Notebooks',
        'description' => null,  
        'slug' => 'notebooks',
    ]);


    \App\Category::create([
        'name' => 'Games',
        'description' => null,
        'slug' => 'games',
    ]);

    return \App\Category::all();
*/

// adicionar um produto para uma categoria ou vice-versa
    $product = \App\Product::find(20);
    dd($product->categories()->sync([1,2])); //adiciona 2 categorias ao produto
});

Route::get('/admin/stores','Admin\\StoreController@index');
//admin/stores > o que o usuario digitará no navegador
// o outro é o controller que será chamado e seu metodo

Route::get('/admin/stores/create','Admin\\StoreController@create');
Route::post('/admin/stores/store','Admin\\StoreController@store');