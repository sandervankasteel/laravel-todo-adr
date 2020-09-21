<?php

namespace Database\Seeders;

use App\Models\TodoItem;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->createOne([
             'email' => 'user@todo-adr.test',
         ]);

         User::factory(9)->create();

         TodoItem::factory(300)->create();
    }
}
