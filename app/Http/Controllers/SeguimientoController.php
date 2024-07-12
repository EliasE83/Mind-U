<?php

namespace App\Http\Controllers;

use App\Models\seguimiento;
use Illuminate\Http\Request;

class SeguimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seguimientos = seguimiento::all();
        return view('seguimientos.index', compact('seguimientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seguimientos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'feelings' => 'required|string',
            'challenge_faced' => 'required|boolean',
            'emotion' => 'required|string',
            'best_part_of_day' => 'nullable|string',
            'lesson_learned' => 'nullable|string',
        ]);

        seguimiento::create([
            'feelings' => $request->feelings,
            'challenge_faced' => $request->challenge_faced,
            'emotion' => $request->emotion,
            'best_part_of_day' => $request->best_part_of_day,
            'lesson_learned' => $request->lesson_learned,
        ]);

        return redirect()->route('seguimientos.index')->with('success', 'Seguimiento registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(seguimiento $seguimiento)
    {
        return view('seguimientos.show', compact('seguimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(seguimiento $seguimiento)
    {
        return view('seguimientos.edit', compact('seguimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, seguimiento $seguimiento)
    {
        $request->validate([
            'feelings' => 'required|string',
            'challenge_faced' => 'required|boolean',
            'emotion' => 'required|string',
            'best_part_of_day' => 'nullable|string',
            'lesson_learned' => 'nullable|string',
        ]);

        $seguimiento->update([
            'feelings' => $request->feelings,
            'challenge_faced' => $request->challenge_faced,
            'emotion' => $request->emotion,
            'best_part_of_day' => $request->best_part_of_day,
            'lesson_learned' => $request->lesson_learned,
        ]);

        return redirect()->route('seguimientos.index')->with('success', 'Seguimiento actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(seguimiento $seguimiento)
    {
        $seguimiento->delete();
        return redirect()->route('seguimientos.index')->with('success', 'Seguimiento eliminado exitosamente.');
    }
}
