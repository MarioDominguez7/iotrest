<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //consultar todos los Usuarios
    public function index(){
        return User::all();
    }
}
