<?php

namespace App\Http\Controllers;

use App\Models\Respondents;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $respondents = Respondents::orderBy('created_at', 'DESC')->get();

        return view('admin.admin', compact('respondents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Respondents::create($request->all());

        return redirect()->route('admin.index')->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $respondents = Respondents::findOrFail($id);

        return view('admin.show', compact('respondents'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $respondents = Respondents::findOrFail($id);

        return view('admin.edit', compact('respondents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $respondents = Respondents::findOrFail($id);

        $respondents->update($request->all());

        return redirect()->route('admin.index')->with('success', 'Data updateed successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $respondents = Respondents::findOrFail($id);

        $respondents->delete();

        return redirect()->route('admin.index')->with('success', 'Data deleted successfully');
    }
}
