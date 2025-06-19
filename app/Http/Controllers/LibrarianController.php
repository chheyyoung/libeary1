<?php

namespace App\Http\Controllers;

use App\Models\Librarian;
use Illuminate\Http\Request;

class LibrarianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $librarians = Librarian::all();
        return view('librarians.index', compact('librarians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('librarians.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        Librarian::create($request->all());
        return redirect()->route('librarians.index')->with('success', 'Librarian created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Librarian $librarian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Librarian $librarian)
    {
        return view('librarians.edit', compact('librarian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Librarian $librarian)
    {
        $librarian->update($request->only(['name', 'email', 'phone']));
        return redirect()->route('librarians.index')->with('success', 'Librairn updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Librarian $librarian)
    {
        $librarian->delete();
        return redirect()->route('librarians.index')->with('success', 'Librarian deleted successfully!');
    }
}
