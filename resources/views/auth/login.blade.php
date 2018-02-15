@extends('layouts.master')
@section('title')
Login
@endsection

@section('contents')
	<div class="container">
		<div class="columns">
			<div class="column is-half is-offset-half">
				<form action="{{route('login.login')}}" method="POST">
					{{ csrf_field() }}
					<div class="field">
						<label for="email" class="label">Email</label>
						<div class="control">
							<input class="input" name="email" type="text" placeholder="alex@example.com">
						</div>
					</div>
					<div class="field">
						<label for="password" class="label">Passowrd</label>
						<div class="control">
							<input class="input" name="password" type="password">
						</div>
					</div>
					<div class="field">
						<div class="control">
							<button class="button is-link" type="submit">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
