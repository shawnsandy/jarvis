@extends(Jarvis::views('layouts.users'))
@section('content')

<div class="columns">

	<div class="column is-6 is-offset-3">

		<div class="">
			<h1 class="subtitle is-1 has-text-centered is-uppercase">
				Reset Password
			</h1>
			<div class="box">
				<div class="section">
					<form data-validate action="{{ url(" password/email ") }}" method="POST">
						{{ csrf_field() }}
						<div class="field">
							<label class="label">Account Email</label>
							<div class="control">
								<input id="email" name="email" class="input is-shadowless is-large" type="email" placeholder="Enter your email address" required>
							</div>
						</div>
						<div class="field is-grouped">
							<div class="control">
								<button type="submit" class="button is-large is-info">
									Send Password Reset Link
								</button>
							</div>
							<div class="control">
								<button type="reset" class="button is-link is-large">
									Cancel
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>


	</div>

</div>


@endsection
