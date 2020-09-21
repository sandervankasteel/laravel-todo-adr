<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\TodoItem;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TodoItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TodoItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::find(random_int(1, User::count()));

        return [
            'checked' => $this->faker->boolean,
            'description' => $this->faker->realText(),
            'due_date' => $this->faker->dateTimeBetween('yesterday', 'tomorrow'),
            'title' => $this->faker->sentence(3),
            'user_id' => $user->id,
        ];
    }
}
