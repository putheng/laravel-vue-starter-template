<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'vendor']);
        Role::create(['name' => 'user']);

        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('password');
        $user->save();

        $user->assignRole('admin');
    }
}
