<div class="row">
    <div class="col-md-12">
        @if(Session::has('msgSuccess'))
        <div class="alert alert-success alert-dismissible form-alerts">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('msgSuccess') }}
        </div>
        @endif

        @if(count($errors->all()) > 0)
        <div class="alert alert-danger alert-dismissible form-alerts">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
