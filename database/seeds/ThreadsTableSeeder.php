<?php

use App\User;
use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (User::all() as $user)
        {
            factory(\App\Thread::class, 2)
                ->create(['user_id' => $user->id]);
        }
    }
}
