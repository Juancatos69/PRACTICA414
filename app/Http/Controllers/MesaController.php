<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
  
    public function index()
    {
        return Mesa::all();
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'material' => 'required|string|max:255',
            'dimensiones' => 'required|string|max:255',
            'estilo' => 'required|string|max:255',
            'color' => 'required|string|max:255',
        ]);

        $mesa = Mesa::create($validatedData);
        return response()->json($mesa, 201); 
    }

    public function show($id)
    {
        $mesa = Mesa::find($id);

        if (!$mesa) {
            return response()->json(['message' => 'Mesa no encontrada'], 404);
        }

        return response()->json($mesa);
    }

    
    public function update(Request $request, $id)
    {
        $mesa = Mesa::find($id);

        if (!$mesa) {
            return response()->json(['message' => 'Mesa no encontrada'], 404);
        }

        
        $validatedData = $request->validate([
            'material' => 'sometimes|required|string|max:255',
            'dimensiones' => 'sometimes|required|string|max:255',
            'estilo' => 'sometimes|required|string|max:255',
            'color' => 'sometimes|required|string|max:255',
        ]);

        $mesa->update($validatedData);
        return response()->json($mesa);
    }

    public function destroy($id)
    {
        $mesa = Mesa::find($id);

        if (!$mesa) {
            return response()->json(['message' => 'Mesa no encontrada'], 404);
        }

        $mesa->delete();
        return response()->json(null, 204); 
    }
}
