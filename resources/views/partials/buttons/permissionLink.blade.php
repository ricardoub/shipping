@permission($btnAcl)
  <a  href="{{ route( $btnLink ) }}" class="btn btn-{{ $btnClass }}" >
    <i class="fa fa-fw fa-{{ $btnIcon }}"></i>
    <span class="hidden-xs hidden-sm">
      {{ $btnName }}
    </span>
  </a>
@endpermission
