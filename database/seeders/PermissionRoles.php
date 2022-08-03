<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Effacer toutes les roles et les permissions qui esont en caches
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // creation des permissions
        Permission::create(['name' => 'crud caissier']);
        Permission::create(['name' => 'crud admin']);
        Permission::create(['name' => 'devises crud']);
        Permission::create(['name' => 'devises par caissier']);
        Permission::create(['name' => 'logs']);
        Permission::create(['name' => 'balance tout']);
        Permission::create(['name' => 'balance personnelle']);
        Permission::create(['name' => 'etat de ma caisse']);
        Permission::create(['name' => 'benefices']);
        Permission::create(['name' => 'echanger argent']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'caissier']);
        $role1->givePermissionTo(['echanger argent', 'etat de ma caisse', 'balance personnelle']);

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('crud caissier');
        $role2->givePermissionTo('devises crud');
        $role2->givePermissionTo('balance tout');

        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Daniel',
        //     'email' => 'test@example.com',
        // ]);
        // $user->assignRole($role1);

        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Example Admin User',
        //     'email' => 'admin@example.com',
        // ]);
        // $user->assignRole($role2);

        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Example Super-Admin User',
        //     'email' => 'superadmin@example.com',
        // ]);
        // $user->assignRole($role3);
    }
}
