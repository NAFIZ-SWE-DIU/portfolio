<?php

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Handle form submission and validation
        // You may want to use Laravel's built-in validation features here

        return redirect('/contact')->with('message', 'Thanks for reaching out!');
    }
}
