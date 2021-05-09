<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilerController extends Controller
{
    public function index () {

        $user = Auth::user();

        return view('profiller.index', [
            'users' => $user
        ]);
    }
}
