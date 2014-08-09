@extends('frontend/layouts/account')



@section('content')

	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
		<form class="form-vertical login-form" action="{{ route('signin') }}" method="POST">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />

			<h3 class="form-title">Login to your account</h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>Enter E-mail address and password.</span>
			</div>
			<div class="control-group {{ $errors->first('email', ' error') }}">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">E-mail address</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="E-mail address" name="email" value="{{ Input::old('email') }}" />				
					</div>
				</div>
				<label for="email" class="help-inline help-small no-left-padding">{{ $errors->first('email', ':message') }}</label>
			</div>
			<div class="control-group {{ $errors->first('password', ' error') }}">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="password"/>
					</div>
				</div>
				<label for="password" class="help-inline help-small no-left-padding">{{ $errors->first('password', ':message') }}</label>
			</div>
			<div class="form-actions">
							<button type="submit" class="btn green pull-right">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>

		</form>
		<!-- END LOGIN FORM -->        
		
	</div>
	<!-- END LOGIN -->




<BR><BR><BR><BR>

<h1>OR <BR><BR><BR>SIGN UP</h1>



<div class="page-header">
	<h3>Sign up</h3>
</div>
<div class="row">
	<form method="post" action="{{ route('signup') }}" class="form-horizontal" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />

		
		<!-- Email -->
		<div class="control-group{{ $errors->first('email', ' error') }}">
			<label class="control-label" for="email">Email</label>
			<div class="controls">
				<input type="text" name="email" id="email" value="{{ Input::old('email') }}" />
				{{ $errors->first('email', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<!-- Email Confirm -->
		<div class="control-group{{ $errors->first('email_confirm', ' error') }}">
			<label class="control-label" for="email_confirm">Confirm Email</label>
			<div class="controls">
				<input type="text" name="email_confirm" id="email_confirm" value="{{ Input::old('email_confirm') }}" />
				{{ $errors->first('email_confirm', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<!-- Password -->
		<div class="control-group{{ $errors->first('password', ' error') }}">
			<label class="control-label" for="password">Password</label>
			<div class="controls">
				<input type="password" name="password" id="password" value="" />
				{{ $errors->first('password', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<!-- Password Confirm -->
		<div class="control-group{{ $errors->first('password_confirm', ' error') }}">
			<label class="control-label" for="password_confirm">Confirm Password</label>
			<div class="controls">
				<input type="password" name="password_confirm" id="password_confirm" value="" />
				{{ $errors->first('password_confirm', '<span class="help-block">:message</span>') }}
			</div>
		</div>

		<hr>

		<!-- Form actions -->
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn">Sign up</button>
			</div>
		</div>
	</form>
</div>
@stop
