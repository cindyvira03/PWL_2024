<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Nama: Cindy Vira Safitri, NIM: 2241720046';
    }

    function articles($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
