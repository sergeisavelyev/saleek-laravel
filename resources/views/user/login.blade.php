@extends('layouts.auth')

@section('title', 'Войти')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ route('home') }}"><b>Saleek</b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Войти в аккаунт</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf
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
                    <div class="row">

                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">Войти</button>
                        </div>

                    </div>
                </form>
                <div class="social-auth-links text-center mb-3">
                    <p>- Или -</p>
                    <a href="{{ route('register.create') }}" class="btn btn-block btn-danger">Зарегистрироваться</a>
                </div>
            </div>

        </div>
    </div>
@endsection
