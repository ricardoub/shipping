@extends('layouts.bootstrap.panel')

@section('panel-head-middle')
  <button type="button" class="btn btn-default btn-title form-control" disabled>
    <i class="fa fa-tasks"></i>
    Alterar
    <span class="hidden-xs hidden-sm">Tarefa</span>
  </button>
@endsection

@section('panel-head-left')
@endsection

@section('panel-head-right')
@endsection

@section('panel-body')
  <br>
  <div class="">
    <div class="form-group col-md-8 col-md-offset-2">
      @include('partials.messages')
      {{ Form::model($model, ['route' => [$actions['form']['update'], $model->id]]) }}
        @include('tasks.form')

        <div class="text-center">
          <hr>
          <div class="btn-group" >
            @include('partials.buttons.form-cancel', [
              'btnName'  => $buttons['cancelindex']['name'],
              'btnLink'  => $buttons['cancelindex']['link'],
              'btnIcon'  => $buttons['cancelindex']['icon'],
              'btnClass' => $buttons['cancelindex']['class'],
            ])
            @include('partials.buttons.form-submit', [
              'btnName'  => $buttons['store']['name'],
              'btnLink'  => $buttons['store']['link'],
              'btnIcon'  => $buttons['store']['icon'],
              'btnClass' => $buttons['store']['class'],
            ])
          </div>
        </div>

      {{ Form::close() }}
    </div>
  </div>
@endsection

@section('page-scripts')
  <!--<script src="/js/todos.js"></script>-->
@stop
