@extends(Jarvis::views('layouts.users'))
 @section('content')


<div class="columns">

    <div class="column is-6 is-offset-3">

        <div class="">
            <h1 class="subtitle is-1 has-text-centered is-uppercase">
                Create an Account
            </h1>
            <div class="box">
                <div class="section">
                    <form data-validate action="login-form">
                        <div class="field">
                            <label class="label">Full Name</label>
                            <div class="control">
                                <input id="text" name="name" class="input is-shadowless is-large" type="text" placeholder="Enter your full name" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Account Email</label>
                            <div class="control">
                                <input id="email" name="email" class="input is-shadowless is-large" type="email" placeholder="Enter your email address" required>
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
                            <label class="label">Confirm Password</label>
                            <div class="control">
                                <input id="confirm_password" name="password" class="input is-shadowless is-large" type="password" placeholder="Confirm your password"
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
                                <button type="submit" class="button is-large is-info"> Create  Account </button>
                            </div>
                            <div class="control">
                                <a href="/" class="button is-link is-large">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>

</div>


@endsection
