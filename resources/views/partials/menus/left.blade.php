<!-- Left Side Of Navbar -->
<ul class="nav navbar-nav">
  @permission('home-menu')
  <li>
    <a tabindex="0" href="{{ route('home') }}">
      <i class="fa fa-home fa-fw"></i>
      Inicio
    </a>
  </li>
  @endpermission
  @if (!auth::guest())

    @permission('service-menu')
      <li class="dropdown">
        <a tabindex="0" data-toggle="dropdown" data-submenu="">
          <i class="fa fa-gear fa-fw"></i>
          Serviços<span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          @permission('task-menu')
          <li >
            <a href="{{ route('tasks.index') }}">
              <i class="fa fa-tasks fa-fw"></i>
              Tarefas
            </a>
          </li>
          @endpermission
          @permission('ticket-menu')
          <li >
            <a href="{{ route('tickets.index') }}">
              <i class="fa fa-newspaper-o fa-fw"></i>
              Etiquetas
            </a>
          </li>
          @endpermission
        </ul>
      </li>
    @endpermission
    @permission('admin-menu')
      <li class="dropdown">
        <a tabindex="0" data-toggle="dropdown" data-submenu="">
          <i class="fa fa-institution fa-fw"></i>
          Administração<span class="caret"></span>
        </a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a tabindex="0">Sistema</a>
              <ul class="dropdown-menu">
                @permission('combo-menu')
                  <li class="">
                    <a href="{{ url('combos.index') }}" tabindex="0">
                      <i class="fa fa-list fa-fw"></i>
                      Caixas de seleção
                      <small class="text-muted">Role: #900</small>
                    </a>
                  </li>
                @endpermission
                @permission('user-menu')
                  <li class="">
                    <a href="{{ url('users.index') }}" tabindex="0">
                      <i class="fa fa-user fa-fw"></i>
                      Usuários
                      <small class="text-muted">Role: #900</small>
                    </a>
                  </li>
                @endpermission
              </ul>
            </li>
          </ul>
      </li>
    @endpermission
  @endif
</ul>
