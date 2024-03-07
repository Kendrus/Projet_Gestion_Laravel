<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Afficher tous les utilisateurs
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Afficher le formulaire de création d'utilisateur
    public function create()
    {
        return view('users.create');
    }

    // Enregistrer un nouvel utilisateur
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);
        $user->save();

        return redirect('/users')->with('success', 'Utilisateur ajouté avec succès');
    }

    // Afficher le formulaire d'édition d'utilisateur
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    // Mettre à jour un utilisateur
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();

        return redirect('/users')->with('success', 'Utilisateur mis à jour avec succès');
    }

    // Supprimer un utilisateur
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success', 'Utilisateur supprimé avec succès');
    }
}

