<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Van;

class MainController extends Controller
{
    public function index() {

        $vans = Van :: all();

        return view('index', compact('vans'));

    }
}
