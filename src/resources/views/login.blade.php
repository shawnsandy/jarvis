@extends(Jarvis::views('layouts.users'))
@section('content')
<div class="columns is-fluid">


    <div class="column is-6 is-offset-3-desktop">

        <div class="">
            <h1 class="subtitle is-1 has-text-centered is-uppercase">
                Account Login
            </h1>
            <div class="box">
                <div class="section">
                    <form data-validate action="{{ url('login') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="field">
                            <label class="label">Account Email</label>
                            <div class="control">
                                <input id="email" name="email" class="input is-shadowless is-large" type="email" placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Account Password</label>
                            <div class="control">
                                <input id="password" name="password" class="input is-shadowless is-large" type="password" placeholder="Enter your password"
                                    required>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <label class="checkbox">
      <input type="checkbox">
     Remember me
    </label>
                            </div>
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-large is-info"> Login to your Account </button>
                            </div>
                            <div class="control">
                                <a href="/jarvis/view/register" class="button is-link is-large">Register</a>
                            </div>
                        </div>
                        <p class="is-5">
                            <a href="{{ url("password/reset") }}">Forgot your password</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>


    </div>

</div>

@endsection
