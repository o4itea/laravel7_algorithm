<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create([
            'role' => 1
        ]);
        factory(User::class, 2)->create([
            'role' => 2
        ]);
        factory(User::class, 6)->create();
    }
}
