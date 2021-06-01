<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Test extends Controller
{
    public function test(){
        Inertia::setRootView('layouts.test');
        return Inertia::render('auth/about');
    }
}