<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;

class UpdateClubAddressForm extends Component
{
    public $address;
    public $official_name;
    public $street;
    public $housenumber;
    public $city;
    public $zip;

    /**
     * Prepare the component.
     *
     * @return void
     */
    public function mount(): void
    {
        $user = Auth::user();

        $this->address = $user->club->adress()->first();

        $this->official_name = $this->address->official_name;
        $this->street = $this->address->street;
        $this->city =  $this->address->city;
        $this->zip = $this->address->zip;
        $this->housenumber = $this->address->housenumber;
    }

    public function updateClubAddress()
    {
        $this->validate([
            'official_name' => 'string|max:255|nullable',
            'street' => 'string|max:255|nullable',
            'city' => 'string|max:255|nullable',
            'zip' => 'string|max:255|nullable',
            'housenumber' => 'string|max:255|nullable',
        ]);

        // update address
        $this->address->official_name = $this->official_name;
        $this->address->street = $this->street;
        $this->address->city = $this->city;
        $this->address->zip = $this->zip;
        $this->address->housenumber = $this->housenumber;
        $this->address->save();

        $this->dispatch('saved');
    }

    /**
     * Render the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('pages.club.update-club-address-form');
    }
}
