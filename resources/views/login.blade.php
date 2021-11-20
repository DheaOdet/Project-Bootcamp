@extends('template.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <img src="../img/animasi.jpg" class="loginimg mw-100 img-fluid" alt="Responsive image">
        </div>
        <div class="col">
            <div class="container">
                <form>
                    <h6 class="fw-bold">Login To Your Account</h6>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <label class="form-check-label" for="exampleCheck1">Don't Have an Account? <a href="/register">
                            Register</a> </label>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection
