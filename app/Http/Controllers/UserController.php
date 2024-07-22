<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use App\Models\Category;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(): View
    {
        $categories = Category::all();
        return view('home', compact('categories'));
    }
}
