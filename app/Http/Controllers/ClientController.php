<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create(Request $request)
    {
        

        return redirect()->route('clients.index')->with('success', 'Client created successfully!');

    }

    public function index(Request $request)
    {

    }

    public function show(Request $request)
    {

    }

    public function update(Request $request)
    {

    }

}
