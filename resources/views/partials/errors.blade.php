@if (count($errors))
                
    <div class="form-group alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>

@endif

@if (isset($success))
                
    <div class="form-group alert alert-success">
        <ul>
            <li> {{ $success }} </li>
        </ul>
    </div>

@endif

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('delete'))
    <div class="alert alert-success alert-block" style="z-index: 10px;">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('denied'))
    <div class="alert alert-danger alert-block" style="z-index: 10px;">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
    </div>
@endif