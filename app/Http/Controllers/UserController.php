<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User1;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login()
    {
        //echo sha1('oso');
        return view('login');
    }

    public function processLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'password'  => 'required'
        ]);

        $name = $request->input('name');
        $password = $request->input('password');
        $data = User1::where(['name' => $name, 'password' => $password])->first();
        if ($data != null) {
            $data_session = [
                'status' => true,
                'name' => $data->name,
                'message' => 'Welcome ' . $data->name
            ];
            Session::put('data_session', $data_session);
            return redirect('/user/menu');
        }

        return redirect('/user/login');
    }

    public function menu()
    {
        echo 'Estoy en el menu';
    }

    public function logout(): RedirectResponse
    {
        session()->flush();
        return redirect('/user/login');
    }
}
