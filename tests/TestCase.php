<?php

namespace Tests;

use App\Models\Club;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function signIn(): void
    {
        $club = Club::factory()->create();
        $user = User::factory()->create(['club_id' => $club->id]);

        $this->actingAs($user);
    }
}
