<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name="admin";
        $role->description="administrador";
        $role->save();

        $role = new Role();
        $role->name="user";
        $role->description="Usuario";
        $role->save();
    }
}
