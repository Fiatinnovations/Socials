@extends('layouts.slave')

@section('title')
Welcome to my Renewed Coding Flame.
@endsection
<link href="/css/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/css/bootstrap-grid.min.css" rel="stylesheet">
<link href="/css/css/bootstrap-reboot.min.css" rel="stylesheet">
@section('content')
    @include('includes.header')
    @include('includes.validation')
        <div class="row" style="margin-top: 20px">
            <div class="col-md-6">
                <h5 style="text-align: center">Sign Up</h5><br>
                <form action="{{route('feelinglucky')}}" method="POST">
                    {{csrf_field()}}
                 <div class="form-group {{$errors->has('email') ? 'has-error': '' }}">
                     <label for="email" >Email</label>
                     <input type="text" class="form-control " name="email" id="email" value="{{old('email')}}">
                 </div>
                    <div class="form-group  {{$errors->has('name') ? 'has-error': ''}}">
                        <label for="email" >First Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group {{$errors->has('password') ? 'has-error': ''}}">
                        <label for="email" >Password</label>
                        <input type="password" class="form-control " name="password" id="password">
                    </div>
                    <input type="hidden" > <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>


            <div class="col-md-6">
                <h5 style="text-align: center">Sign In</h5><br>
                <form action="{{route('welcome')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group {{$errors->has('email') ? 'has-error': '' }}">
                        <label for="email" >Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{old('value')}}">
                    </div>
                    <div class="form-group {{$errors->has('password') ? 'has-error': '' }}">
                        <label for="email" >Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-success">Sign In</button>
                </form>
            </div>

        </div>








@endsection