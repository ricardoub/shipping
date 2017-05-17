<div class="row">
  <div class="form-group col-md-12 col-sm-12">
    {{ Form::Label('name', 'Nome da tarefa *', ['class' => 'form-label col-md-12']) }}
    <div class="input-group">
      <span class="input-group-addon">
        <i class="fa fa-tasks fa-fw"></i>
      </span>
      {{ Form::text('name', $model->name, ['class' => 'form-control', 'placeholder' => 'Nome da tarefa', 'disabled' => $options['form']['disabled'] ]) }}
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group col-md-6 col-sm-6">
    {{ Form::label('user_id', 'Responsável *', ['class' => 'form-label col-md-12']) }}
    <div class="input-group">
      <span class="input-group-addon">
        <i class="fa fa-user fa-fw"></i>
      </span>

      @if (!$options['form']['disabled'])
        @permission('task-owner')
          {{ Form::select('user_id', $combos['users'], $model->user_id, ['class' => 'form-control', 'disabled' => $options['form']['disabled'] ]) }}
        @else
          {{ Form::text('user_name', $combos['users'][$model->user_id], ['class' => 'form-control', 'placeholder' => 'Nome da opção', 'disabled' => !$options['form']['disabled'] ]) }}
          {{ Form::hidden('user_id', $model->user_id, array('id' => 'user_id')) }}
        @endpermission
      @else
        {{ Form::text('user_name', $combos['users'][$model->user_id], ['class' => 'form-control', 'placeholder' => 'Nome da opção', 'disabled' => $options['form']['disabled'] ]) }}
        {{ Form::hidden('user_id', $model->user_id, array('id' => 'user_id')) }}
      @endif
    </div>
  </div>

  <div class="form-group col-md-6 col-sm-6">
    {{ Form::label('name', 'Prioridade *', ['class' => 'form-label col-md-12']) }}
    <div class="input-group">
      <span class="input-group-addon">
        <i class="fa fa-sort-numeric-asc fa-fw"></i>
      </span>
      {{ Form::text('priority', $model->priority, ['class' => 'form-control', 'placeholder' => 'Prioridade', 'disabled' => $options['form']['disabled'] ]) }}
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group col-md-6 col-sm-6">
    {{ Form::label('option', '% Completo *', ['class' => 'form-label col-md-12']) }}
    <div class="input-group">
      <span class="input-group-addon">
        <i class="fa fa-percent fa-fw"></i>
      </span>
      @if (!$options['form']['disabled'])
        {{ Form::select('percent', $combos['percent10'], $model->percent, ['class' => 'form-control', 'disabled' => $options['form']['disabled'] ]) }}
      @else
        {{ Form::text('percent', $model->percent, ['class' => 'form-control', 'placeholder' => 'Nome da opção', 'disabled' => $options['form']['disabled'] ]) }}
      @endif
    </div>
  </div>

  <div class="form-group col-md-6 col-sm-6">
    {{ Form::label('option', 'Situação *', ['class' => 'form-label col-md-12']) }}
    <div class="input-group">
      <span class="input-group-addon">
        <i class="fa fa-hashtag fa-fw"></i>
      </span>
      @if (!$options['form']['disabled'])
        {{ Form::select('status', $combos['status'], $model->status, ['class' => 'form-control', 'disabled' => $options['form']['disabled'] ]) }}
      @else
        {{ Form::text('status', $combos['status'][$model->status], ['class' => 'form-control', 'placeholder' => 'Nome da opção', 'disabled' => $options['form']['disabled'] ]) }}
      @endif
    </div>
  </div>
</div>
