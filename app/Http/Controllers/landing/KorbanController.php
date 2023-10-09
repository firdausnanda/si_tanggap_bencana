<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KorbanController extends Controller
{
    public function index() {
        return view('pages.landing.korban');
    }
}
