<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = User::where('club_id', $user->club->id)->get();
        return view('pages.member.index', ['users' => $users]);
    }
}
