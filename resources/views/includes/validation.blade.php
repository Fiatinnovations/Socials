@if(count($errors) > 0)

    <div class="row" class="alert alert-danger" style="margin-top: 10px; margin-left: 38%">
        <div class="col-md-12">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(Session::has('message'))
    <div class="row" class="alert alert-danger" style="margin-top: 10px; margin-left: 38%">
        <div class="col-md-12">
            {{Session::get('message')}}
        </div>
    </div>
@endif