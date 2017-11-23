@extends('layouts.app')

<style tyoe="text/css">
	.profile-img {max-width: 150px; border-radius: 100%; border: 5px solid #fff; box-shadow: 0 2px 2px rgba(0,0,0, 0.3);}
</style>


@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				<img class="profile-img" src="https://cdn3.f-cdn.com/ppic/4596980/logo/3703140/59593_448873375179894_887317911_n.jpg" alt="">
				<h1> {{$user->name}} </h1>
				<h5>{{$user->email}}</h5>
				<h5>{{$user->dob->format('l j F Y')}} ({{$user->dob->age}} years old)</h5>
				<button class="btn btn-success">Follow</button>
			</div>
		</div>
	</div>
</div>
@endsection