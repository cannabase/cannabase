<?php

namespace App\Http\Controllers;

use App\Models\ClubAddress;
use Illuminate\Http\Request;

class ClubAddressController extends Controller
{
    public function index()
    {
        return ClubAddress::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'official_name' => ['nullable'],
            'street' => ['nullable'],
            'housenumber' => ['nullable'],
            'city' => ['nullable'],
            'zip' => ['nullable'],
        ]);

        return ClubAddress::create($data);
    }

    public function show(ClubAddress $clubAddress)
    {
        return $clubAddress;
    }

    public function update(Request $request, ClubAddress $clubAddress)
    {
        $data = $request->validate([
            'official_name' => ['nullable'],
            'street' => ['nullable'],
            'housenumber' => ['nullable'],
            'city' => ['nullable'],
            'zip' => ['nullable'],
        ]);

        $clubAddress->update($data);

        return $clubAddress;
    }

    public function destroy(ClubAddress $clubAddress)
    {
        $clubAddress->delete();

        return response()->json();
    }
}
