<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use App\User;
/**
 * Description of UserController
 *
 * @author Leo
 */
class UserController extends Controller {
    
    public function index() {
        $users = User::all();
        return view('users.index')->with(compact('users'));
    }
}
