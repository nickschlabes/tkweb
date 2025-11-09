<?php

namespace App\Http\Controllers;

use App\Models\Vorstand;
use Illuminate\Http\Request;

class VorstandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vorstandMembers = Vorstand::orderBy('order')->get();
        return view('vorstand.index', compact('vorstandMembers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vorstand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('vorstand', 'public');
        }

        Vorstand::create($validated);

        return redirect()->route('vorstand.index')->with('success', 'Vorstandsmitglied erfolgreich hinzugefügt.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vorstand = Vorstand::findOrFail($id);
        return view('vorstand.edit', compact('vorstand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vorstand = Vorstand::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'order' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('vorstand', 'public');
        }

        $vorstand->update($validated);

        return redirect()->route('vorstand.index')->with('success', 'Vorstandsmitglied erfolgreich aktualisiert.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vorstand = Vorstand::findOrFail($id);
        $vorstand->delete();

        return redirect()->route('vorstand.index')->with('success', 'Vorstandsmitglied erfolgreich gelöscht.');
    }
}
