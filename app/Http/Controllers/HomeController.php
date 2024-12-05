<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Masayu Nisa Atika \'Masayu',
            'nim' => '2257401073',
            'class' => 'MI22A',
        ];

        return view('home', $data);
    }
    public function logout()
    {
        auth()->logout(); // Logout user
        return redirect('/welcome'); // Arahkan ke halaman welcome setelah logout
    }
}
