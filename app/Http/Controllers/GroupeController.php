<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use App\Models\Groupe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupeController extends Controller
{
    public function index(Request $request)
    {
        //Récuperer le formateur connecter

        $formateurId = Auth::id();

        //Récupérer les groupes associés à ce formateur

        $formateur = Formateur::findOrFail($formateurId);

        $groupes = $formateur->groupes;

        // Récupérer le code du groupe sélectionné
        $selectedCodeG = $request->input('groupe');
        $selectedGroup = null;

        if ($selectedCodeG) {

            $selectedGroup = Groupe::where('codeG', $selectedCodeG)->first();
            // Récupérer les modules associés au groupe sélectionné
            $modules = $selectedGroup ? $selectedGroup->modules : [];
        } else {
            $modules = [];
        }
        return view('Pages.acceuil', compact('groupes', 'selectedGroup', 'modules'));
    }
}
