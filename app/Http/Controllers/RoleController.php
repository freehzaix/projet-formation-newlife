<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //Afficher le formulaire pour ajouter un rôle
    public function form_ajouter(){
        return view('role.add');
    }
    
    //Traitement du formulaire pour ajouter un rôle
    public function form_ajouter_post(Request $request){
        $request->validate([
            'nom_role' => 'required'
        ]);
        $role = new Role();
        $role->nom_role = $request->nom_role;
        $role->save();

        return redirect()->route('ajouter_role')->with('status', 'Le rôle a bien été ajouté.');
    }

    //Afficher la liste des rôles enregistrer dans la base de données
    public function form_list_role(){
        $roles = Role::all();
        return view('role.list', compact('roles'));
    }

    //Affichier l'interface pour modifier les rôles
    public function form_modifier($id){
        $role = Role::find($id);
        return view('role.modifier', compact('role'));
    }

    //Traitement du formulaire pour modifier un rôle
    public function form_modifier_post(Request $request){
        $request->validate(['nom_role' => 'required']);
        $role = Role::find($request->id);
        $role->nom_role = $request->nom_role;
        $role->update();

        return redirect()->route('list_role')->with('status', 'Le rôle a bien été modifié.');
    }

    //Suppression d'un rôle
    public function form_supprimer($id){
        $role = Role::find($id);
        $role->delete();

        return redirect()->route('list_role')->with('status', 'Le rôle a bien été supprimé.');
    }
}
