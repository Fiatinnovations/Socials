@extends('layouts.master')
@section('content')

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                    </a>
                                    <div class="message-body"><small class="pull-right">3 mins ago</small>
                                        <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                        <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                    </a>
                                    <div class="message-body"><small class="pull-right">1 hour ago</small>
                                        <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                        <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="all-button"><a href="#">
                                        <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                    </a></div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <em class="fa fa-bell"></em><span class="label label-info">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><a href="#">
                                    <div><em class="fa fa-envelope"></em> Profile
                                        <span class="pull-right text-muted small">3 mins ago</span></div>
                                </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                    <div><em class="fa fa-heart"></em> 12 New Likes
                                        <span class="pull-right text-muted small">4 mins ago</span></div>
                                </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                    <div><em class="fa fa-user"></em> 4 New Dislikes
                                        <span class="pull-right text-muted small">4 mins ago</span></div>
                                </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                    <div><em class="fa fa-user"></em> <a href="{{route('logout')}}">Logout</a>
                                        </div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">{{Auth::user()->name}}</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            
        </ul>
    </div><!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div><!--/.row-->
        <div class="row" style="background: #ffffff">
            <h5 style="margin-right: 50px; color:#ff2e1f">@include('includes.validation')</h5>

            <section>
                <div  class=" col-md-6 col-md-offset-3">
                    <header><h4 style="text-align: center">Whats On your mind</h4></header>

                    <form action="{{route('createpost')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group"></div>
                        <textarea class="form-control" name="body" id="body"  rows="7"></textarea><br>
                        <button type="submit" class="btn btn-primary">Post</button>

                        <input type="hidden" name="_token" value="{{Session::token() }}">
                    </form>

                </div>
            </section>
            <section >
                <div class="col-md-6 col-md-offset-3">
                    @if($posts)
                        @foreach($posts as $post)
                <div class="panel panel-default" data-postid ={{$post->id}}>
                    <header><h4 style="text-align: center; font-weight: 500"> What People are Saying</h4></header>

                    <div class="panel-body">
                        <p>{{$post->body}}</p>
                    </div>
                    <div class="panel-body" style="margin-top: -24px">
                        <p>
                            <p>Posted By: <span style="color:blue">{{$post->user->name}}</span>  {{$post->created_at->diffForHumans()}} </p>
                        </p>


                        <a href="">Like</a>|
                        <a href="">Dislike</a>|


                       @if(Auth::user() == $post->user)
                            <a href="#" id="editbtn">Edit</a>|
                            <a href="{{route('deletepost', ['post_id' => $post->id])}}">Delete</a>
                           @endif

                    </div>
                   @endforeach
                    @endif







                </div>

                </div>
            </section>

        </div>

        <div class="modal" tabindex="-1" role="dialog" id="my-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form >
                            <div class="form-group">
                                <label for="">Edit Post</label>
                                <textarea class="form-control" id="myPost" name="myPost" rows="5"></textarea>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="saveEdit">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var token = '{{Session::token()}}';
            var url   = '{{route('edit')}}';
        </script>




@endsection