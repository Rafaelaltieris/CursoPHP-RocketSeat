<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke (Request $request)
    {
        $user = User::find(1);
        // $user = User::query()->create([
        //     'name' => 'Rafael',
        //     'email' => 'rafa@fa.com',
        //     'password' => 'jeremias'
        // ]);

        dd($user->email_verified_at->diffForHumans());

        return View('Welcome');
    }
}
