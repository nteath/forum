<?php

use App\User;
use App\Thread;
use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Thread::all() as $thread) {
            factory(\App\Reply::class, 5)->create([
                'user_id' => User::inRandomOrder()->first()->id,
                'thread_id' => $thread->id,
            ]);
        }
    }
}
