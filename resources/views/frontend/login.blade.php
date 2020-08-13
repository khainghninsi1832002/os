@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<h2> Customer Login Page </h2>
	<form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="conpwd" class="form-control" placeholder="Enter Your Confirm Password">
        </div>


        <input type="submit" value="+ Register" class="btn btn-outline-dark" name="submit">
    </form>
</div>

@endsection