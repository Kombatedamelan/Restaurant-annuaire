<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'Admin')->first();

        User::create([
            'lastname'=>'KOMBATE',
            'firstname'=>'Damelan',
            'email'=>'kombatedamelan@gmail.com',
            'password'=>Hash::make('albatros'),
            'role_id'=>'1',
        ]);

        User::create([
            'lastname'=>'ALOSSOUNOU',
            'firstname'=>'Shallom',
            'email'=>'alosshalom@gmail.com',
            'password'=>Hash::make('alossounou'),
            'role_id'=>'1',
        ]);
    }
}
