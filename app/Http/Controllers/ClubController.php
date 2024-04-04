<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClubController extends Controller
{
    public function index()
    {
        $clubId = Auth::user()->club_id;
        $club = Club::find($clubId);
        return view('pages.club.index', ['club' => $club]);
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
}
