
    @if($errors->has())
        <div class='alert alert-danger'>
        <!--recorremos los errores en un loop y los mostramos-->
            <h4 class="header smaller lighter red">Error</h4>
            @foreach ($errors->all('<p>:message</p>') as $message)
                {!! $message !!}
            @endforeach
        </div>
    @endif
