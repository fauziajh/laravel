<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hellocontroller extends Controller
{
    //function baru dengan nama index
    public function index()
    {
        echo "<hi>hello dari controller !!!</h1>";
        $nama = "Fauzi Setiawan";
        $hobby = "Main HP, Makan, Tidur";
        return view ('helo.index', compact ('nama','hobby'));
    }
}
