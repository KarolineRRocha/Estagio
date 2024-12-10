<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apartmentsComplexController extends Controller
{
    public function show()
    {
        return view('utils.apartmentsComplex');
    }
}
