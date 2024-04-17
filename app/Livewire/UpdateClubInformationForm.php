<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;

class UpdateClubInformationForm extends Component
{
    public $club;
    public $name;
    public $email;
    public $website;
    public $status;

    /**
     * Prepare the component.
     *
     * @return void
     */
    public function mount(): void
    {
        $user = Auth::user();

        $this->club = $user->club()->first();

        $this->name = $this->club->name;
        $this->email = $this->club->email;
        $this->website = $this->club->website;
        $this->status = $this->club->status;
    }

    public function updateClubInformation()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|url',
            'status' => 'required|integer',
        ]);

        // update club
        $this->club->name = $this->name;
        $this->club->email = $this->email;
        $this->club->website = $this->website;
        $this->club->status = $this->status;
        $this->club->save();

        $this->dispatch('saved');
    }

    /**
     * Render the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('pages.club.update-club-information-form');
    }
}
