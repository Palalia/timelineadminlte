<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\Users;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'root',
            'display_name'=>'root',
            'description'=>'Usuario con todos los permisos'
        ]);
    }
}
