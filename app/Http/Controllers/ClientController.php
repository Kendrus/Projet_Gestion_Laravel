<?php

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'firstname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);

        Client::create($request->all());

        return redirect('/clients')->with('success', 'Client ajouté avec succès');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'firstname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);

        Client::find($id)->update($request->all());

        return redirect('/clients')->with('success', 'Client mis à jour avec succès');
    }

    public function destroy($id)
    {
        Client::destroy($id);

        return redirect('/clients')->with('success', 'Client supprimé avec succès');
    }
}


