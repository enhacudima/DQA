<?php

use Illuminate\Database\Seeder;

class produtoSendeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => 'Luvas',
            'descricao' => 'Luvas para as mãos',
            'codigo'=>'CONS-PF-002',
            'user_id'=>'1'
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Alcool',
            'descricao' => 'Alcool Etilico 70% Vol 1 frasco plastico',
            'codigo'=>'CONS-PF-003',
            'user_id'=>'1'
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Alcool Gel 70% Desinfectante das Mãos 500ml',
            'descricao' => 'Alcool Gel 70% Desinfectante das Mãos 500ml',
            'codigo'=>'CONS-PF-004',
            'user_id'=>'1'
        ]);

    }
}
