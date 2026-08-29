<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CreditController extends Controller
{
    public function index(){
        return Inertia::render('credits/credit');
    }
}
