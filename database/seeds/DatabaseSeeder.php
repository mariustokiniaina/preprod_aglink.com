<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(User::class, 20)
          ->create();
        $user = User::find(1);
        $user->admin = true;
        $user->save();

    }
}
