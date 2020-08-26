<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as UserTable;

class User extends Controller
{
    public function showUser($id)
    {
        $user = UserTable::findOrFail($id);
        $adress = $user->adress;

        return view('main', compact('user', 'adress'));
    }
}
