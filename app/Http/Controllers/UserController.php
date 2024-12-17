<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller {
    public function index()
    {
        $rows = User::all();
        return view('users.index', compact('rows'));
    }
}
