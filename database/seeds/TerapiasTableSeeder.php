<?php

use Illuminate\Database\Seeder;

class TerapiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terapias = new \App\Terapias();
        $terapias->create([
            'terapia' => 'Reiki',
            'foto' => '',
            'descricao' => 'Terapia com as mãos'
        ]);

        $terapias->create([
            'terapia' => 'Barras de Access',
            'foto' => '',
            'descricao' => 'Terapia com as mãos'
        ]);

        $terapias->create([
            'terapia' => 'Thetahealing',
            'foto' => '',
            'descricao' => 'Terapia com as mãos'
        ]);
    }
}
