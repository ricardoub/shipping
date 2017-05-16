@extends('layouts.bootstrap.panel')

@section('panel-head-middle')
  <button type="button" class="btn btn-default btn-title form-control" disabled>
    <i class="fa fa-dashboard"></i>
    Dashboard
    <span class="hidden-xs hidden-sm"> </span>
  </button>
@endsection

@section('panel-head-left')
@endsection

@section('panel-head-right')
@endsection

@section('panel-body')
  <div class="col-md-8 col-md-offset-2">
    You are logged in!
  </div>
@endsection


@section('page-scripts')
  <!--<script src="/js/todos.js"></script>-->
@stop
