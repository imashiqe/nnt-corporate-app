<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->paginate(10);

        return view('backend.client.index', compact('clients'));
    }

    public function create()
    {
        return view('backend.client.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'logo' => 'required|image'
        ]);

        $logo = $request->file('logo')
            ->store('clients', 'public');

        Client::create([
            'name' => $request->name,
            'logo' => $logo
        ]);

        return redirect()
            ->route('client.index')
            ->with('success', 'Client Added');
    }

    public function edit(Client $client)
    {
        return view('backend.client.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $logo = $client->logo;

        if ($request->hasFile('logo')) {

            Storage::disk('public')
                ->delete($client->logo);

            $logo = $request->file('logo')
                ->store('clients', 'public');
        }

        $client->update([
            'name' => $request->name,
            'logo' => $logo
        ]);

        return redirect()
            ->route('client.index')
            ->with('success', 'Updated Successfully');
    }

    public function destroy(Client $client)
    {
        Storage::disk('public')
            ->delete($client->logo);

        $client->delete();

        return back()
            ->with('success', 'Deleted Successfully');
    }
}