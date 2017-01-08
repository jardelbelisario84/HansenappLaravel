<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call(UserTableSeeder::class);
         $this->call(UsuarioSeeder::class);
         $this->call(UBSSeeder::class);
         $this->call(PacienteSeeder::class);
         $this->call(ContatoSeeder::class);
         $this->call(PostTableSeeder::class);

        Model::reguard();
    }
}
