<?php

use Illuminate\Database\Seeder;

class ButtonsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $buttons = [
      [
        'code'  => 'back',
        'name'  => 'Voltar',
        'link'  => 'index',
        'icon'  => 'arrow-left',
        'class' => 'default'
      ],
      [
        'code'  => 'cancelindex',
        'name'  => 'Cancelar',
        'link'  => 'index',
        'icon'  => 'reply',
        'class' => 'default'
      ],
      [
        'code'  => 'create',
        'name'  => 'Incluir',
        'link'  => 'create',
        'icon'  => 'plus',
        'class' => 'default'
      ],
      [
        'code'  => 'delete',
        'name'  => 'Excluir',
        'link'  => 'delete',
        'icon'  => 'trash',
        'class' => 'default'
      ],
      [
        'code'  => 'destroy',
        'name'  => 'Excluir',
        'link'  => 'destroy',
        'icon'  => 'trash',
        'class' => 'danger'
      ],
      [
        'code'  => 'edit',
        'name'  => 'Editar',
        'link'  => 'edit',
        'icon'  => 'edit',
        'class' => 'default'
      ],
      [
        'code'  => 'home',
        'name'  => 'Início',
        'link'  => 'home',
        'icon'  => 'home',
        'class' => 'default'
      ],
      [
        'code'  => 'show',
        'name'  => 'Exibir',
        'link'  => 'show',
        'icon'  => 'folder-open-o',
        'class' => 'default'
      ],
      [
        'code'  => 'save',
        'name'  => 'Salvar',
        'link'  => 'store',
        'icon'  => 'save',
        'class' => 'default'
      ],
    ];
    DB::table('buttons')->insert($buttons);
  }
}
