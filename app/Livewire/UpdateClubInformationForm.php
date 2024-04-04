<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Livewire\Component;
use Livewire\WithFileUploads;

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
        $this->validate();

        $this->club->update([
            'name' => $this->club->name,
        ]);

        session()->flash('message', 'Club information updated successfully.');

        return redirect()->route('club.show', $this->club);
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
