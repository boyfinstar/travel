@extends ('pages.master')

@section ('content')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}


<hr>
<br>
<br>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10">
            <h1>User name</h1>
        </div>
        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image"
                    class="img-circle img-responsive"
                    src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->

            <div class="text-center">
                <img src="{{ Auth::user()->profile_image }}" class="avatar img-circle img-thumbnail"
                    alt="avatar">
                <h6>Upload a different photo...</h6>
            </div>

            <br>

            <div class="panel panel-default">
                <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
            </div>

            <ul class="list-group">
                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
            </ul>

            <div class="panel panel-default">
                <div class="panel-heading">Social Media</div>
                <div class="panel-body">
                    <a href="{{ Auth::user()->email }}"> <i class="fa fa-facebook fa-2x"></i> </a> <i class="fa fa-github fa-2x"></i> <i
                        class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i
                        class="fa fa-google-plus fa-2x"></i>
                </div>
            </div>

        </div>
        <!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Your Details</a></li>
            </ul>

            <div class="tab-content">
                
                @include('partials.errors')

                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="/profile" method="POST" id="registrationForm" enctype="multipart/form-data">
                       
                        @if(!$errors->isEmpty())
                        
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach($errors->all() as $err)
                                    <li>{{$err}}</li>
                                @endforeach
                            </ul>
                          </div>
                        @endif
                        
                        @csrf
                        @method('PUT')
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h4>First name</h4>
                                </label>
                                <input type="text" class="form-control" name="name" id="first_name"
                                    placeholder="{{ Auth::user()->name }}" title="enter your first name if any.">
                                {{-- @endif --}}
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name">
                                    <h4>Last name</h4>
                                </label>
                                <input type="text" class="form-control" name="lastname" id="last_name"
                                    placeholder="{{ Auth::user()->lastname }}" title="enter your last name if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile">
                                    <h4>Mobile Number</h4>
                                </label>
                                <input type="number" class="form-control" name="phone" id="mobile"
                                    placeholder="{{ Auth::user()->phone }}" title="enter your mobile number if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="{{ Auth::user()->email }}" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="location">
                                    <h4>Location</h4>
                                </label>
                                <input type="text" class="form-control" id="location" name="location"
                                    placeholder="{{ Auth::user()->location }}" title="enter a location">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="image">
                                    <h4>Profile Image</h4>
                                </label>
                                <input type="file" class="form-control" id="image" name="profile_image"
                                    placeholder="{{ Auth::user()->profile_image }}" title="enter a location">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i
                                        class="glyphicon glyphicon-ok-sign"></i> Update</button>
                                {{-- <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                    Reset</button> --}}
                            </div>
                        </div>
                    </form>
                  
                </div>
                <!--/tab-pane-->

            </div>
            <!--/tab-content-->

        </div>
        <!--/col-9-->

    </div>
    <!--/row-->

    @endsection