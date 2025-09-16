<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index()
    {
        // Show a list of merchandise
        return view('merchandise.index');
    }

}
