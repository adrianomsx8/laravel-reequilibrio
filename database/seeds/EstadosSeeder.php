<?php

use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ************************************************************
        // Regiões
        // ************************************************************
       
        $norte = 'NORTE';
        $sul   = 'SUL';
        $nordeste = 'NORDESTE';
        $centroOeste = 'CENTRO-OESTE';
        $sudeste = 'SUDESTE';
        


        // ************************************************************
        // Estados
        // ************************************************************
        DB::table('estados')->insert([
            'id' => 12,
            'sigla' => 'AC',
            'nome' => 'Acre',
            'regiao' => $norte,
            'latitude' => '-8.77',
            'longitude' => '-70.55'
        ]);

        DB::table('estados')->insert([
            'id' => 27,
            'sigla' => 'AL',
            'nome' => 'Alagoas',
            'regiao' => $nordeste,
            'latitude' => '-9.62',
            'longitude' => '-36.82'
        ]);

        DB::table('estados')->insert([
            'id' => 16,
            'sigla' => 'AP',
            'nome' => 'Amapá',
            'regiao' => $norte,
            'latitude' => '1.41',
            'longitude' => '-51.77'
        ]);

        DB::table('estados')->insert([
            'id' => 13,
            'sigla' => 'AM',
            'nome' => 'Amazonas',
            'regiao' => $norte,
            'latitude' => '-3.47',
            'longitude' => '-65.1'
        ]);

        DB::table('estados')->insert([
            'id' => 29,
            'sigla' => 'BA',
            'nome' => 'Bahia',
            'regiao' => $nordeste,
            'latitude' => '-13.29',
            'longitude' => '-41.71'
        ]);

        DB::table('estados')->insert([
            'id' => 23,
            'sigla' => 'CE',
            'nome' => 'Ceará',
            'regiao' => $nordeste,
            'latitude' => '-5.2',
            'longitude' => '-39.53'
        ]);

        DB::table('estados')->insert([
            'id' => 53,
            'sigla' => 'DF',
            'nome' => 'Distrito Federal',
            'regiao' => $centroOeste,
            'latitude' => '-15.83',
            'longitude' => '-47.86'
        ]);

        DB::table('estados')->insert([
            'id' => 32,
            'sigla' => 'ES',
            'nome' => 'Espírito Santo',
            'regiao' => $sudeste,
            'latitude' => '-19.19',
            'longitude' => '-40.34'
        ]);

        DB::table('estados')->insert([
            'id' => 52,
            'sigla' => 'GO',
            'nome' => 'Goiás',
            'regiao' => $centroOeste,
            'latitude' => '-15.98',
            'longitude' => '-49.86'
        ]);

        DB::table('estados')->insert([
            'id' => 21,
            'sigla' => 'MA',
            'nome' => 'Maranhão',
            'regiao' => $nordeste,
            'latitude' => '-5.42',
            'longitude' => '-45.44'
        ]);

        DB::table('estados')->insert([
            'id' => 51,
            'sigla' => 'MT',
            'nome' => 'Mato Grosso',
            'regiao' => $centroOeste,
            'latitude' => '-12.64',
            'longitude' => '-55.42'
        ]);

        DB::table('estados')->insert([
            'id' => 50,
            'sigla' => 'MS',
            'nome' => 'Mato Grosso do Sul',
            'regiao' => $centroOeste,
            'latitude' => '-20.51',
            'longitude' => '-54.54'
        ]);

        DB::table('estados')->insert([
            'id' => 31,
            'sigla' => 'MG',
            'nome' => 'Minas Gerais',
            'regiao' => $sudeste,
            'latitude' => '-18.1',
            'longitude' => '-44.38'
        ]);

        DB::table('estados')->insert([
            'id' => 15,
            'sigla' => 'PA',
            'nome' => 'Pará',
            'regiao' => $norte,
            'latitude' => '-3.79',
            'longitude' => '-52.48'
        ]);

        DB::table('estados')->insert([
            'id' => 25,
            'sigla' => 'PB',
            'nome' => 'Paraíba',
            'regiao' => $nordeste,
            'latitude' => '-7.28',
            'longitude' => '-36.72'
        ]);

        DB::table('estados')->insert([
            'id' => 41,
            'sigla' => 'PR',
            'nome' => 'Paraná',
            'regiao' => $sul,
            'latitude' => '-24.89',
            'longitude' => '-51.55'
        ]);

        DB::table('estados')->insert([
            'id' => 26,
            'sigla' => 'PE',
            'nome' => 'Pernambuco',
            'regiao' => $nordeste,
            'latitude' => '-8.38',
            'longitude' => '-37.86'
        ]);

        DB::table('estados')->insert([
            'id' => 22,
            'sigla' => 'PI',
            'nome' => 'Piauí',
            'regiao' => $nordeste,
            'latitude' => '-6.6',
            'longitude' => '-42.28'
        ]);

        DB::table('estados')->insert([
            'id' => 33,
            'sigla' => 'RJ',
            'nome' => 'Rio de Janeiro',
            'regiao' => $sudeste,
            'latitude' => '-22.25',
            'longitude' => '-42.66'
        ]);

        DB::table('estados')->insert([
            'id' => 24,
            'sigla' => 'RN',
            'nome' => 'Rio Grande do Norte',
            'regiao' => $nordeste,
            'latitude' => '-5.81',
            'longitude' => '-36.59'
        ]);

        DB::table('estados')->insert([
            'id' => 43,
            'sigla' => 'RS',
            'nome' => 'Rio Grande do Sul',
            'regiao' => $sul,
            'latitude' => '-30.17',
            'longitude' => '-53.5'
        ]);

        DB::table('estados')->insert([
            'id' => 11,
            'sigla' => 'RO',
            'nome' => 'Rondônia',
            'regiao' => $norte,
            'latitude' => '-10.83',
            'longitude' => '-63.34'
        ]);

        DB::table('estados')->insert([
            'id' => 14,
            'sigla' => 'RR',
            'nome' => 'Roraima',
            'regiao' => $norte,
            'latitude' => '1.99',
            'longitude' => '-61.33'
        ]);

        DB::table('estados')->insert([
            'id' => 42,
            'sigla' => 'SC',
            'nome' => 'Santa Catarina',
            'regiao' => $sul,
            'latitude' => '-27.45',
            'longitude' => '-50.95'
        ]);

        DB::table('estados')->insert([
            'id' => 35,
            'sigla' => 'SP',
            'nome' => 'São Paulo',
            'regiao' => $sudeste,
            'latitude' => '-22.19',
            'longitude' => '-48.79'
        ]);

        DB::table('estados')->insert([
            'id' => 28,
            'sigla' => 'SE',
            'nome' => 'Sergipe',
            'regiao' => $nordeste,
            'latitude' => '-10.57',
            'longitude' => '-37.45'
        ]);

        DB::table('estados')->insert([
            'id' => 17,
            'sigla' => 'TO',
            'nome' => 'Tocantins',
            'regiao' => $norte,
            'latitude' => '-9.46',
            'longitude' => '-48.26'
        ]);

        // ************************************************************
        // Exceção
        // ************************************************************
        DB::table('estados')->insert([
            'id' => 99,
            'sigla' => 'EX',
            'regiao' => '',
            'nome' => 'Exterior'
        ]);

    }

}
