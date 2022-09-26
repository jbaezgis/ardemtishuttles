<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrator']);
        $role4 = Role::create(['name' => 'Agency']);
        $role2 = Role::create(['name' => 'Driver']);
        $role3 = Role::create(['name' => 'Client']);

        Permission::create(['name' => 'admin.dashboard'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.bookings'])->syncRoles([$role1]);
        Permission::create(['name' => 'bookings'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name' => 'profile'])->syncRoles([$role1,$role2,$role3,$role4]);

    }
}
