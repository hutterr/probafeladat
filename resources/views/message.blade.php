@if(count( $errors) > 0)
    @foreach($errors->all() as $error)
        <div class='aler alert-danger'>
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('succes'))
    <div class='alert alert-success'>
        {{session('succes')}}
    </div>
@endif

@if(session('error'))
    <div class='alert alert-danger'>
        {{session('error')}}
    </div>
@endif