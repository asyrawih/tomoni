<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = collect([
            [
                'name'      => 'hanan',
                'email'     => 'hasyrawi@gmail.com'
            ]
        ]);
        $admin->each(fn ($user) => factory(User::class)->state('is_admin')->create($user));
    }
}
