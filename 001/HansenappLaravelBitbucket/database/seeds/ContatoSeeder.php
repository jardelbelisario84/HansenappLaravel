<?php

use Illuminate\Database\Seeder;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        //  $contato = [
        //  		'id' => '1',
        //     'nome' => 'UBS VILA LOBÃO',
        //     'bairro' => 'Vila Lobão',
        //     'rua' => 'Rua Antonio de Miranda', 
        //     'numero' => 'S/N',
        //     'created_at' => "1980-02-10 00:00:00",
        //     'updated_at' => "1980-02-10 00:00:00"
           
        // ];

        factory('App\Models\Painel\Contato',10)->create();
    }
}
