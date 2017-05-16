<?php

use Illuminate\Database\Seeder;

class CombosTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $percent10 = [
      [
        'name'  => 'percent10',
        'value'  => '0',
        'option' => '0 %'
      ],
      [
        'name'  => 'percent10',
        'value'  => '10',
        'option' => '10 %'
      ],
      [
        'name'  => 'percent10',
        'value'  => '20',
        'option' => '20 %'
      ],
      [
        'name'  => 'percent10',
        'value'  => '30',
        'option' => '30 %'
      ],
      [
        'name'  => 'percent10',
        'value'  => '40',
        'option' => '40 %'
      ],
      [
        'name'  => 'percent10',
        'value'  => '50',
        'option' => '50 %'
      ],
      [
        'name'  => 'percent10',
        'value'  => '60',
        'option' => '60 %'
      ],
      [
        'name'  => 'percent10',
        'value'  => '70',
        'option' => '70 %'
      ],
      [
        'name'  => 'percent10',
        'value'  => '80',
        'option' => '80 %'
      ],
      [
        'name'  => 'percent10',
        'value'  => '90',
        'option' => '90 %'
      ],
      [
        'name'  => 'percent10',
        'value'  => '100',
        'option' => '100 %'
      ]
    ];
    DB::table('combos')->insert($percent10);

    $simnao = [
      [
        'name'  => 'simnao',
        'value'  => '0',
        'option' => 'selecione...'
      ],
      [
        'name'  => 'simnao',
        'value'  => '1',
        'option' => 'Sim'
      ],
      [
        'name'  => 'simnao',
        'value'  => '2',
        'option' => 'Não'
      ],
    ];
    DB::table('combos')->insert($simnao);

    $status = [
      [
        'name'  => 'status',
        'value'  => '0',
        'option' => 'Selecione...'
      ],
      [
        'name'  => 'status',
        'value'  => '1',
        'option' => 'Aberto'
      ],
      [
        'name'  => 'status',
        'value'  => '2',
        'option' => 'Atendimento'
      ],
      [
        'name'  => 'status',
        'value'  => '3',
        'option' => 'Pendente'
      ],
      [
        'name'  => 'status',
        'value'  => '4',
        'option' => 'Entregue'
      ],
      [
        'name'  => 'status',
        'value'  => '5',
        'option' => 'Fechado'
      ],
      [
        'name'  => 'status',
        'value'  => '6',
        'option' => 'Cancelado'
      ],
    ];
    DB::table('combos')->insert($status);
  }
}
