<?php

namespace App\Observers;

use App\Models\Club;
use App\Models\ClubAddress;

class ClubObserver
{
    /**
     * Handle the Club "created" event.
     */
    public function created(Club $club): void
    {
        ClubAddress::create([
            'club_id' => $club->id
        ]);
    }

    /**
     * Handle the Club "updated" event.
     */
    public function updated(Club $club): void
    {
        //
    }

    /**
     * Handle the Club "deleted" event.
     */
    public function deleted(Club $club): void
    {
        //
    }

    /**
     * Handle the Club "restored" event.
     */
    public function restored(Club $club): void
    {
        //
    }

    /**
     * Handle the Club "force deleted" event.
     */
    public function forceDeleted(Club $club): void
    {
        //
    }
}
