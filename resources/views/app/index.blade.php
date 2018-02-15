@extends('layouts.app')
@section('content')
	<div id="app">
		<index>{{ Auth::user()->first_name }}</index>
	</div>
@endsection
