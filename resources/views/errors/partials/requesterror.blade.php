    @if($errors->has())
        <div class='alert alert-danger'>
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        <!--recorremos los errores en un loop y los mostramos-->
            <h4 class="header smaller lighter red">Error</h4>
            @foreach ($errors->all('<p>:message</p>') as $message)
                {!! $message !!}
            @endforeach
        </div>
    @endif
