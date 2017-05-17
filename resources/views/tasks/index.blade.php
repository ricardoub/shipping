@extends('layouts.bootstrap.panel')

@section('panel-head-middle')
  <button type="button" class="btn btn-default btn-title form-control" disabled>
    <i class="fa fa-tasks"></i>
    Listar
    <span class="hidden-xs hidden-sm">Tarefas</span>
  </button>
@endsection

@section('panel-head-left')
  @include('partials.buttons.link', [
    'btnName'  => $buttons['home']['name'],
    'btnLink'  => $buttons['home']['link'],
    'btnIcon'  => $buttons['home']['icon'],
    'btnClass' => $buttons['home']['class'],
  ])
@endsection

@section('panel-head-right')
  @include('partials.buttons.permissionLink', [
    'btnAcl'   => 'task-create',
    'btnName'  => $buttons['create']['name'],
    'btnLink'  => $buttons['create']['link'],
    'btnIcon'  => $buttons['create']['icon'],
    'btnClass' => $buttons['create']['class'],
  ])
@endsection

@section('panel-body')
  @include('partials.messages')
  @include('tasks.table')
  @include('partials.paginate')
@endsection

@section('page-scripts')
  <!--<script src="/js/todos.js"></script>-->
@stop
