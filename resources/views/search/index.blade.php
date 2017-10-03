@extends('layouts.app')

@section('content')
	<h1>Mitä mulla on kaapissa?</h1>
	<form action="{{ action('SearchController@search') }}" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group">
			<div class="col-sm-12">
				<input type="text" name="keyword" id="keyword" class="form-control" placeholder="Aines" autocomplete="off">
			</div>
		</div>
		<div class="form-group">
			<ul id="foods">
			</ul>
		</div>
		<div class="form-group">
			<ul id="selected"></ul>
		</div>
	</form>

@endsection