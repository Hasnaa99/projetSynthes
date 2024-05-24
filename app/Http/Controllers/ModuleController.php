<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\Groupe;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function show(Groupe $groupe, Module $module)
    {
        // Vous pouvez récupérer d'autres données ou effectuer des actions ici
        return view('module.show', compact('groupe', 'module'));
    }
    public function create_evaluation($groupe_id, $module_id){
        $groupe = Groupe::findOrFail($groupe_id);
        $module = Module::findOrFail($module_id);
        return view('createEvaluation',compact('groupe','module'));
    }
    public function store_evaluation(Request $request){
        $validatedData = $request->validate([
            'type' => 'required|in:CC,EFM',
            'date' => 'required|date',
            'bareme' => 'required|in:20,40',
            'duree' => 'required|integer|min:1',
            'groupe_id' => 'required|exists:groupes,id',
            'module_id' => 'required|exists:modules,id',
        ]);
        dd($validatedData);


        Evaluation::create($validatedData);

    }
}
