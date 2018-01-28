<?php

use Illuminate\Database\Seeder;

class Atividade extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atividades')->insert([
            'codigo' => 'Emidio Nhacudima',
            'atividade' => 'enhacudima@psi.org.mz',
            'tipo_atividade' => '2',
            'tipo_ativfaixa_etariaidade' => '2',
            'user_id' => '2'
        ]);

    }
}
