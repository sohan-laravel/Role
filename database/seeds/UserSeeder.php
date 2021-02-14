<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'zohirulislam1416@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "sohan";
            $user->email = "zohirulislam1416@gmail.com";
            $user->password = Hash::make('01858220225@@');
            $user->save();
        }
    }
}
