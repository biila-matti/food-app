@extends('layouts.search')

@section('content')
	<form action="{{ action('SearchController@search') }}" method="get" class="form-horizontal">
		<input type="hidden" data-role="array" name="ingredients" value="">
		<div class="col-sm-12">
			<div class="form-group">
					<input type="text" id="keyword" class="form-control" placeholder="Aines" autocomplete="off">
					<ul id="foods"></ul>
			</div>
		</div>
		<div class="col-sm-12 ingredient-list">
			<h3>Lista</h3>
			<ul id="selected"></ul>
		</div>
		<div class="col-sm-12">
			<div class="form-group text-center">
				<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-search"></i> Etsi</button>
			</div>
		</div>
	</form>

@endsection