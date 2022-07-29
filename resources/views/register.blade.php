<link href="{{ asset('css/register.css') }}" rel="stylesheet" type="text/css">
<div class="centerdiv container">
    <br>
    <h3>Register or Login</h3>
    <hr>
    <div class="form-group">
        <form method="POST" action="{{ route('register') }}">
        @csrf
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label for="first_name"><h5>First Name: </h5></label>
                <input class="form-control" type="text" id="fname" name="first_name" placeholder="Enter First Name" value="{{ Request::old('first_name') }}">
            </div>
            <div class="col-md-6">
                <label for="last_name"><h5>Last Name: </h5></label>
                <input class="form-control" type="text" id="lname" name="last_name" placeholder="Enter Last Name" value="{{ Request::old('last_name') }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label for="email"><h5>Email ID: </h5></label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email" value="{{ Request::old('email') }}">
            </div>
            <div class="col-md-6">
                <label for="dob"><h5>Date of Birth: </h5></label>
                <input class="form-control" type="date" id="dob" name="dob" placeholder="Enter Date of Birth" value="{{ Request::old('dob') }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label for="password"><h5>Password: </h5></label>
                <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password" value="{{ Request::old('password') }}">
            </div>
            <div class="col-md-6">
                <label for="conf_password"><h5>Confirm Password: </h5></label>
                <input class="form-control" type="password" id="conf_password" name="conf_password" placeholder="Confirm Password" value="{{ Request::old('conf_password') }}">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-success" id="register">Register</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <br>
        <br>
        </form>
    </div>
    <hr>
    <br>
</div>


