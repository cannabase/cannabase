<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class MemberList extends Component
{
    use WithPagination;

    public $users;
    public string $search = '';
    public int $clubId;

    public function mount(): void
    {
        $this->clubId = Auth::user()->club_id;
    }

    public function render(): mixed
    {
        $this->users = User::query()
            ->where('club_id', $this->clubId)
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->orderBy('name', 'ASC')
            ->get();

        return view('livewire.member-list');
    }
}
