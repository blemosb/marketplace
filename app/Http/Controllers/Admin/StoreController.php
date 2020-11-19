<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    
    public function index() {
        $stores = \App\Store::all(); //::paginate(10); para paginar de 10 em 10
        return view('admin.stores.index',compact('stores'));
        //admin.stores.index > caminho da view dentro de resources
        //stores > parametro sendo passado
    }

    public function create()
    {
        $users = \App\User::all(['id', 'name']);

    	return view('admin.stores.create',compact('users'));
    }

    public function store(Request $request)
    {
    	dd($request->all());
    }
    
}
