<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       


         $user = [

            'name' => 'Jardel Belisario',
            'email' => 'comput.jardel3@gmail.com',
            'password' => bcrypt('jhsb84'), 
            'telefone' => '(55) 55555-5555',
            'permissao' => 1, 
            'remember_token' => str_random(10),
            'created_at' => "1980-02-10 00:00:00",
            'updated_at' => "1980-02-10 00:00:00",
            'id_ubs'    => null
            
        ];

        $user2 = [

            'name' => 'Meu Email de testes',
            'email' => 'meuemaildeteste1@email.com',
            'password' => bcrypt('jhsb84'), 
            'telefone' => '(55) 55555-5555',
            'permissao' => 2,
            'remember_token' => str_random(10),
            'created_at' => "1980-02-10 00:00:00",
            'updated_at' => "1980-02-10 00:00:00",
            'id_ubs'    => null
            
        ];

        DB::table('users')->insert($user);
        DB::table('users')->insert($user2);

        factory('App\User',10)->create();
    }
}
