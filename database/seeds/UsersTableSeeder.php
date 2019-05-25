<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $num=rand(500,5000);
        $users = factory(User::class)->times($num)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'Summer';
        $user->email = 'summer@example.com';
        $user->password = bcrypt('xuan123');
        $user->is_admin = true;
        $user->save();
    }
}
