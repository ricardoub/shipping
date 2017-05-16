<!-- Left Side Of Navbar -->
<ul class="nav navbar-nav">
  <li>
    <a tabindex="0" href="{{ route('home') }}">
      <i class="fa fa-home fa-fw"></i>
      Inicio
    </a>
  </li>
  @if (!auth::guest())
    <li >
      <a href="{{ route('tasks.index') }}">
        <i class="fa fa-tasks fa-fw"></i>
        Tarefas
      </a>
    </li>
    <li class="dropdown">
      <a tabindex="0" data-toggle="dropdown" data-submenu="">
        <i class="fa fa-institution fa-fw"></i>
        Administração<span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li class="dropdown-submenu">
          <a tabindex="0">Sistema</a>
          <ul class="dropdown-menu">
            <li class="">
              <a href="{{ url('combos.index') }}" tabindex="0">
                <i class="fa fa-list fa-fw"></i>
                Caixas de seleção
                <small class="text-muted">Role: #900</small>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  @endif
</ul>
