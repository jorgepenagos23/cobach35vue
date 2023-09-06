<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolesSeeder extends Seeder
{
    protected $priority = 5;

    public function run(): void
    {

        $roles = new Roles();
        $roles->nombre = 'director';
        $roles->guard_nombre = 'web';
        $roles->save();

        $roles = new Roles();
        $roles->nombre = 'subdirector';
        $roles->guard_nombre = 'web';
        $roles->save();

        $roles = new Roles();
        $roles->nombre = 'administrador';
        $roles->guard_nombre = 'web';
        $roles->save();

        $roles = new Roles();
        $roles->nombre = 'orientador';
        $roles->guard_nombre = 'web';
        $roles->save();

        $roles = new Roles();
        $roles->nombre = 'estudiante';
        $roles->guard_nombre = 'web';
        $roles->save();




    }



}
