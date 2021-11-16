@extends('template.layout')
@section('content')

<div class="container">
<form>
    <div class="form-group">
        <label for="exampleInputName1">Name</label>
        <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp"
            placeholder="Enter name">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Username</label>
        <input type="username" class="form-control" id="exampleInputUsername1" placeholder="Username">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div class="form-group">
        <label for="exampleInputRePassword1">Re-Password</label>
        <input type="Re-Password" class="form-control" id="exampleInputRePassword1" placeholder="RePassword">
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Already Have an Account? <a href="/login"> Login</a> </label>
    </div>
</form>
</div>
@endsection

