<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        $user = new User();
        $user->username = 'ardianadmin';
        $user->firstname = 'ardian';
        $user->lastname = 'k';
        $user->password = Hash::make('passwordadmin');
        $user->email = 'ardian@admin.com';
        $user->is_admin = '1';
        $user->save();

        $user = new User();
        $user->username = 'indrauser';
        $user->firstname = 'indra';
        $user->lastname = 'k';
        $user->password = Hash::make('passworduser');
        $user->email = 'indra@user.com';
        $user->is_admin = '0';
        $user->save();

        $user = new User();
        $user->username = 'ireneuser';
        $user->firstname = 'irene';
        $user->lastname = 'bae';
        $user->password = Hash::make('passworduser');
        $user->email = 'irene@user.com';
        $user->is_admin = '0';
        $user->save();

        $user = new User();
        $user->username = 'tanjiruser';
        $user->firstname = 'tanjiro';
        $user->lastname = 'kamado';
        $user->password = Hash::make('passworduser');
        $user->email = 'tanjiro@user.com';
        $user->is_admin = '0';
        $user->save();


        // $table->id('user_id');
        // $table->string('firstname');
        // $table->string('lastname');
        // $table->string('email')->unique();
        // $table->string('password');
        // $table->boolean('is_admin');
        // $table->rememberToken();
        // $table->timestamps();
    }
}
