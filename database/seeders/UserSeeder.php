<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//importamos el modelo User
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //llamamos al modelo y le pasamos el metodo create, para agregar nuevos registros a la bd
        User::create([
            'name'=>'Jorge Ramirez',
            'email'=>'jr@gmail.com',
            'password'=>bcrypt('12345')
        ]);

    }

    //despues importamos este archivo dentro del DataBaseSeeder
}
