@extends('master')

@section('title', 'Register Form')

@section('content')
<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible" role="alert">
		<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<div class="container" style="margin-top: 10%">
	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">Become Our Member</h4>
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="{{ url('/register') }}">
						{!! csrf_field() !!}
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input class="form-control" placeholder="Fullname" name="fullname" type="text" value="{{ old('fullname') }}" autofocus>
							</div>
                        </div>
                        <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input class="form-control" placeholder="Account" name="acc" type="text" value="{{ old('acc') }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input class="form-control" placeholder="Address" name="address" type="text" value="{{ old('address') }}" autofocus>
                                    </div>
                                </div>
                        <div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input class="form-control" placeholder="Phone Number" name="phone" type="text" value="{{ old('phone') }}" autofocus>
							</div>
                        </div>
                        <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input class="form-control" placeholder="Birthday" name="birth" type="text" value="{{ old('birth') }}" autofocus>
                                </div>
                            </div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input class="form-control" placeholder="Email" name="email" type="text" value="{{ old('email') }}">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input class="form-control" placeholder="Password" name="password" type="password">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password">
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-lg btn-primary btn-block">Sign-up</button>
						</div>
						<center><a href="/{{ url('/login') }}">Back to Login Page</a></center>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
body{
	background: #17568C;
}
.panel{
	border-radius: 5px;
}
.panel-heading {
    padding: 10px 15px;
}
.panel-title{
	text-align: center;
	font-size: 15px;
	font-weight: bold;
	color: #17568C;
}
.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
}
.profile-img {
	width: 120px;
	height: 120px;
	margin: 0 auto 10px;
	display: block;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
}
</style>
@endsection
