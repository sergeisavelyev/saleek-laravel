@extends('layouts.auth')

@section('title', 'Регистрация')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ route('home') }}"><b>Saleek</b></a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Регистрация</p>
                <form action="{{ route('register.store') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Имя/Логин" value="{{ old('name') }}"> 
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Емайл" value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Пароль">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">Регистрация</button>
                        </div>

                    </div>
                </form>
                <div class="social-auth-links text-center">
                    <p>- Или -</p>
                    <a href="{{ route('login.create') }}" class="btn btn-block btn-danger">
                        У меня уже есть аккаунт
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
