<?php
namespace App\Http\Repository\Auth;

use Inertia\Inertia;

trait LoginTrait{

    public function showLoginForm()
    {
        Inertia::setRootView("layouts.test");
        return Inertia::render('auth/login');
    }
}