@extends('layouts.app')


@section('content')
<div class="row">
 <div class="col s12 m5">
	&nbsp;
 </div>

 <div class="col s12 m6">
	<div class="card card-panel large">
	 <form class="col s12" action="{{url('/register')}}" method="post">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		@if(count($errors) > 0)
		 <div class="row">
			<div class="col s12 m6">
			 @foreach($errors as $error)
				<ul>
				 <li class="accent-1">{{$errors}}</li>
				</ul>
			 @endforeach
			</div>
		 </div>
		@endif
		<div class="row">
		 <div class="input-field col s12">
			<input placeholder="username" id="username" name="name" type="text">
			<label for="username">Username</label>
		 </div>
		</div>
		<div class="row">
		 <div class="input-field col s12">
			<input type="text" placeholder="email" name="email" id="email">
			<label for="email">Email</label>
		 </div>
		</div>
		<div class="row">
		 <div class="input-field col s12">
			<input type="password" name="password" placeholder="password" id="password">
			<label for="password">Password</label>
		 </div>
		</div>
		<div class="row">
		 <div class="input-field col s12">
			<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password">
			<label for="password_confirmation">Confirm your password</label>
		 </div>
		</div>
		<div class="row">
		 <button class="btn waves-effect waves-light right" type="submit" name="action">Sign Up
			<i class="material-icons right">send</i>
		 </button>
		</div>
	 </form>
	</div>
 </div>
</div>

</div>
@endsection