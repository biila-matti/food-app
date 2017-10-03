@extends('layouts.app')

@section('content')
	<h1>Tulokset</h1>
	<hr>
	@foreach($matches as $match)
	<h3>{{ $match->name }} <span style="padding:5px;border-radius:15px;border:1px solid">{{ $match->percentage }} %</span></h3>
	<ul>
		@foreach($match->foodsToArray as $id => $food)
			@if(in_array($id, $array))
			<li style="color:green;font-weight:bold">{{ $food }}</li>
			@else
			<li>{{ $food }}</li>
			@endif
		@endforeach
	</ul>
	@endforeach

@endsection