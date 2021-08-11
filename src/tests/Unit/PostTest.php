<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_five_users_in_the_database()
    {
        $users = User::factory()
            ->times(5)
            ->create();

        $this->assertDatabaseCount('users', 5);
    }
}
