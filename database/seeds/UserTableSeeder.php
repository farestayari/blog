<?php

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
       $user = App\User::create([
            'name'=>'fares tayari',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('123456'),
            'admin'=>1
        ]);

        App\Profile::create([
            'user_id'=> $user->id,
            'avatar'=>'uploads/avatars/1',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ad fuga animi temporibus est nisi mollitia? Animi, sapiente nobis corporis minima fugiat error id? Commodi tempora nam magnam nulla.',
            'facebook'=>'facebook.com',
            'youtube'=>'youtube.com'
        ]);
    }
}
