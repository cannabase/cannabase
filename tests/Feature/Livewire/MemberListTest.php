<?php

namespace Tests\Feature\Livewire;

use App\Livewire\MemberList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class MemberListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(MemberList::class)
            ->assertStatus(200);
    }
}
