<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //consultar todos los Usuarios
    public function index(){
        return User::paginate();
    }
    //consultar un Usuario
    public function show($id){
        return User::find($id);
    }

    //crear un Usuario
    public function store(Request $request){
        return User::create($request->all());
    }

    //actualizar un Usuario
    public function update(Request $request,$id){
        $user = User::find($id);
        $user->update($request->all());
        $user->save();
        return $user;
    }

    //eliminar un Usuario
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return $user;
    }


}
