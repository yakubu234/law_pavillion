<?php

namespace App\Actions;

use App\Models\Client;

class CreateClientAction
{
    public function create(array $data, string $fileName)
    {
        $newData = array_merge($data, ['profile_image' => $fileName]);

        $client = Client::create($newData);
        return redirect()->route('clients.index')->with('success', 'Client created successfully!');
    }
}