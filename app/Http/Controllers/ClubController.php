<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        return Club::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'mail' => ['nullable'],
            'website' => ['nullable'],
            'logo' => ['nullable'],
            'status' => ['required', 'integer'],
            'plus' => ['boolean'],
        ]);

        return Club::create($data);
    }

    public function show(Club $club)
    {
        return $club;
    }

    public function update(Request $request, Club $club)
    {
        $data = $request->validate([
            'name' => ['required'],
            'mail' => ['nullable'],
            'website' => ['nullable'],
            'logo' => ['nullable'],
            'status' => ['required', 'integer'],
            'plus' => ['boolean'],
        ]);

        $club->update($data);

        return $club;
    }

    public function destroy(Club $club)
    {
        $club->delete();

        return response()->json();
    }
}
