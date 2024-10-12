<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{
    //
    public function __invoke(Request $request){
        
        // $user = User::query()->create([
        //     'name' => 'Camila',
        //     'email' => 'camy@teste.com',
        //     'password' => '123',
        // ]);

        //$user = User::find(1);
        //dd($user->email_verified_at->diffForHumans);
        
        return view('welcome');
    }
}
