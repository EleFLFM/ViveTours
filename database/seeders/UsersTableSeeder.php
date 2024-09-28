<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;  

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Crear roles si no existen
       $adminRole = Role::firstOrCreate(['name' => 'admin']);
       $clientRole = Role::firstOrCreate(['name' => 'cliente']);

       // Crear usuario admin
       $admin = User::create([
           'name' => 'Luis Fernando',
           'email' => 'luifermejia1104@gmail.com',
           'password' => bcrypt('admin123'),
       ]);

       // Asignar rol al usuario
       $admin->assignRole($adminRole);
       
       $client = User::create([
        'name' => 'Client User',
        'email' => 'client@example.com',
        'password' => bcrypt('client123'),
    ]);

    // Asignar rol de cliente
    $client->assignRole($clientRole);
    }

}
