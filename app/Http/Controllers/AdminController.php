<?php

namespace App\Http\Controllers;

use App\Models\Respondents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'gender' => 'required|string|in:Laki-laki,Perempuan',
            'age' => 'required|integer|min:0',
            'status' => 'required|string|in:sudah vaksin,belum vaksin',
            'doses' => 'required|string|in:1,2,3,4,5',
            'vaccine' => 'required|string|in:Sinovac,AstraZeneca,Moderna,Pfizer-BioNTech,Sinopharm',
            'effects' => 'required|string',
            'medical_history' => 'required|string',
            'importance' => 'required|string|in:1,2,3,4,5',
            'info_sufficiency' => 'required|string|in:1,2,3,4,5',
            'service_rate' => 'required|string|in:1,2,3,4,5',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        $data['email'] = Auth::user()->email;

        Respondents::create($data);

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

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'gender' => 'required|string|in:Laki-laki,Perempuan',
            'age' => 'required|integer|min:0',
            'status' => 'required|string|in:sudah vaksin,belum vaksin',
            'doses' => 'required|string|in:1,2,3,4,5',
            'vaccine' => 'required|string|in:Sinovac,AstraZeneca,Moderna,Pfizer-BioNTech,Sinopharm',
            'effects' => 'required|string',
            'medical_history' => 'required|string',
            'importance' => 'required|string|in:1,2,3,4,5',
            'info_sufficiency' => 'required|string|in:1,2,3,4,5',
            'service_rate' => 'required|string|in:1,2,3,4,5',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

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
