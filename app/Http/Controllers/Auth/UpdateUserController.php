<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class UpdateUserController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::user()->role == "admin")
        {
          $request->query('id');
          $request->query('name');
          $request->query('email');
          $request->query('role');
          $request->query('cabang_eskul');
        }
        else{
            return redirect()->to('/dashboard');
        }
    }
}
