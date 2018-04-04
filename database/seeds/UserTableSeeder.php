<?php

use App\Models\User;
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
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user            = User::find(1);
        $user->name      = 'LiaoChao';
        $user->email     = 'liaochao@foxmail.com';
        $user->password  = bcrypt('lc2011');
        $user->is_admin  = true;
        $user->activated = true;
        $user->save();
    }
}
