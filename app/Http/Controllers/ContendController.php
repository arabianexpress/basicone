<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContendController extends Controller
{
    public function index(): View
    {
        return view('contends', [
            //
        ]);
    }
}
