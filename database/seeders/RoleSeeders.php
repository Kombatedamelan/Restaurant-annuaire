<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ["name"=>"Admin", "description"=>"Administrateur du site"],
            ["name"=>"Prester", "description"=>"prestataire"],
            ["name"=>"User", "description"=>"utilisateur"],
        ];

        foreach($roles as $role){
            Role::create($role);
        }
    }
}
