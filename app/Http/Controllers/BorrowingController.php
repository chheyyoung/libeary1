<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $borrowings = Borrowing::all();
        return view('borrowings.index', compact('borrowings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('borrowings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'studentname' => 'required',
            'bookname' => 'required',
            'dateborrowed' => 'required|date',
            'datereturn' => 'required|date',
        ]);

        Borrowing::create($request->all());
        return redirect()->route('borrowings.index')->with('success', 'Borrowings created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrowing $borrowing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrowing $borrowing)
    {
        return view('borrowings.edit', compact('borrowing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Borrowing $borrowing)
    {
         $borrowing->update($request->only(['studentname', 'bookname', 'dateborrowed', 'datereturn']));
        return redirect()->route('borrowings.index')->with('success', 'Borrowings updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrowing $borrowing)
    {
        $borrowing->delete();
        return redirect()->route('borrowings.index')->with('success', 'Borrowing deleted successfully!');
    }
}
