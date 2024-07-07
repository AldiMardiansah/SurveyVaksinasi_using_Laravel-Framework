<?php

namespace App\Http\Controllers;

use App\Models\Respondents;
use Illuminate\Http\Request;

class RespondentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $respondents = Respondents::orderBy('created_at', 'DESC')->get();

        return view('respondents.index', compact('respondents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('respondents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Respondents::create($request->all());

        return redirect()->route('respondents.index')->with('success', 'Data added successfully');
    }
}
