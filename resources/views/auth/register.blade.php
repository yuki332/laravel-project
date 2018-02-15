@extends('layouts.master')
@section('title')
Register
@endsection

@section('contents')
	<div class="container">
		<div class="columns">
			<div class="column is-half is-offset-half">
				<form action="{{route('register.store')}}" method="POST">
					{{ csrf_field() }}
					<div class="columns">
						<div class="column">
							<div class="field">
								<label class="label" for="last name">First</label>
								<div class="control">
									<input class="input" name="first_name" type="text" placeholder="Alex">
								</div>
							</div>
						</div>
						<div class="column">
							<div class="field">
								<label class="label" for="last name">Last</label>
								<div class="control">
									<input class="input" name="last_name" type="text" placeholder="Smith">
								</div>
							</div>
						</div>
					</div>
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
						<label for="password confirm" class="label">Re-enter Password</label>
						<div class="control">
							<input class="input" name="password_confirmation" type="password">
						</div>
					</div>
					<div class="field is-grouped">
						<div class="control">
							<button class="button is-link" type="submit">Submit</button>
						</div>
						<div class="control">
							<button class="button is-light">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
