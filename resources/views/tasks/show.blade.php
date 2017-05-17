@extends('layouts.bootstrap.panel')

@section('panel-head-middle')
  <button type="button" class="btn btn-default btn-title form-control" disabled>
    <i class="fa fa-tasks"></i>
    Exibir
    <span class="hidden-xs hidden-sm">Tarefa</span>
  </button>
@endsection

@section('panel-head-left')
  @include('partials.buttons.link', [
    'btnName'  => $buttons['back']['name'],
    'btnLink'  => $buttons['back']['link'],
    'btnIcon'  => $buttons['back']['icon'],
    'btnClass' => $buttons['back']['class'],
  ])
@endsection

@section('panel-head-right')
  @include('partials.buttons.permissionLinkWithId', [
    'btnAcl'   => 'task-edit',
    'btnName'  => $buttons['edit']['name'],
    'btnLink'  => $buttons['edit']['link'],
    'btnIcon'  => $buttons['edit']['icon'],
    'btnClass' => $buttons['edit']['class'],
  ])
  @include('partials.buttons.permissionLinkWithId', [
    'btnAcl'   => 'task-delete',
    'btnName'  => $buttons['delete']['name'],
    'btnLink'  => $buttons['delete']['link'],
    'btnIcon'  => $buttons['delete']['icon'],
    'btnClass' => $buttons['delete']['class'],
  ])
@endsection

@section('panel-body')
  <br>
  <div class="">
    <div class="form-group col-md-8 col-md-offset-2">
      @include('partials.messages')
      @include('tasks.form')
    </div>
  </div>
@endsection

@section('page-scripts')
  <!--<script src="/js/tasks.js"></script>-->
@stop
