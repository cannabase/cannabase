<?php

namespace Tests\Feature\Livewire;

use App\Livewire\MemberList;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class MemberListTest extends TestCase
{
    // login in application as setup
    public function setUp(): void
    {
        parent::setUp();

        $this->signIn();
    }

    /** @test */
    public function renders_successfully()
    {
        Livewire::test(MemberList::class)
            ->assertStatus(200);
    }
}
