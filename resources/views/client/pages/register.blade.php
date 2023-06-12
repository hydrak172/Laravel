@extends('client.layout.master')

@section('content')
    <div id="register">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('nguoidung.dangky')}}" method="POST">
                            @csrf
                            <h3 class="text-center text-info">Register</h3>
                            @if ($errors->any())
                                <div class="row justify-content-center align-items-center">
                                    <ul>
                                        @foreach ($errors->all() as $error )
                                            <li><span style="color:red;">{{$error}}</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="name" class="text-info">Username:</label><br>
                                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                                @error('name')
                                    <div class="alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info" >Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
                                @error('name')
                                    <div class="alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                                @error('name')
                                    <div class="alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Register here">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
