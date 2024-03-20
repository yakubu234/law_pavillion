<?php

namespace App\Http\Controllers;

use App\Actions\CreateClientAction;
use App\Http\Requests\CreateClientRequest;
use App\Models\Client;
use Exception;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create(CreateClientRequest $request)
    {
        $fileName = '';
         # Upload profile picture
         if ($request->hasFile('profile_image')) {
            try {
                if ($request->hasFile('profile_image')) {
                    $fileName = $request->file('profile_image')->store('profile_images', 'public');
                }
            } catch (\Throwable $th) {
                throw new Exception($th->getMessage()); # log the error
            }
        }
        return (new CreateClientAction())->create($request->validated(), $fileName);
    }

    public function showCreateView()
    {
        return view('create');
    }

    public function index(Request $request)
    {
        $clients = Client::query()->orderBy('last_name')->get();
        return view('index', compact('clients'));
    }

    public function show(Request $request)
    {
       
    }

    

    public function update(Request $request)
    {

    }

}
