@extends('front-end.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <form action="#" method="post">
                    @csrf
                    <div class="card mb-5">
                        <div class="card-header bg-success">
                            <h1 class="text-center">Register Here</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>First Name:</label>
                                <input type="text" name="first_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Last Name:</label>
                                <input type="text" name="last_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email Address:</label>
                                <input type="text" name="email_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone Number:</label>
                                <input type="text" name="phone_no" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Address:</label>
                                <textarea type="text" name="address" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5">
                {{Session::get('message')}}
                <form action="#" method="post">
                    @csrf
                    <div class="card mb-5">
                        <div class="card-header bg-success">
                            <h1 class="text-center">Login Here</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Email Address:</label>
                                <input type="text" name="email_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

