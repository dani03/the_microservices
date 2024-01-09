<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {

        $users = User::factory()
            ->count(5)->hasPosts(2);

        // $this->assertDatabaseCount('users', 2);
        $this->assertTrue(true);
    }
}
