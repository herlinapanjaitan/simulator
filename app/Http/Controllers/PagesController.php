<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function about()
    {
        $halaman = 'about';
        return view('pages.about', compact('halaman'));
    }

    public function contact()
    {
        $halaman = 'contact';
        return view('pages.contact', compact('halaman'));
    }
}
