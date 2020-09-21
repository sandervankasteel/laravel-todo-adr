<?php

namespace Tests\Feature;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class CreateTodoItemTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testThatTodoItemIsCreated()
    {
        $user = User::factory()->create();
        Auth::login($user);

        $dueDate = Carbon::now()->addWeek();

        $response = $this->post('/todo', [
            'title' => 'This is a test title',
            'description' => 'Lorum Ipsum',
            'due_date' => $dueDate->toDateString(),
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('todo_items', [
            'title' => 'This is a test title',
            'description' => 'Lorum Ipsum',
            'due_date' => $dueDate->toDateString()
        ]);

    }
}
